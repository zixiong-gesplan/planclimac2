<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        if ($ip === '127.0.0.1') {
            return $next($request);
        }

        $now = Carbon::now();
        $shouldRegister = false;

        if ($ip === '85.52.32.190') {
            $shouldRegister = ! $this->hasVisitedThisWeek($ip, $now);
        } else {
            $shouldRegister = ! $this->hasVisitedToday($ip, $now);
        }

        if ($shouldRegister) {
            $visitor = Visitor::firstOrCreate(
                ['ip_address' => $ip],
                [
                    'user_agent' => substr((string) $request->userAgent(), 0, 255),
                    'visited_at' => $now,
                ],
            );
            // $visitor->increment('visits');
            $visitor->save();
            $visitor->touch(); // actualiza updated_at
        }

        return $next($request);
    }

    private function hasVisitedToday(string $ip, Carbon $now): bool
    {
        return Visitor::where('ip_address', $ip)
            ->whereDate('updated_at', $now->toDateString())
            ->exists();
    }

    private function hasVisitedThisWeek(string $ip, Carbon $now): bool
    {
        return Visitor::where('ip_address', $ip)
            ->whereYear('updated_at', $now->year)
            ->where(DB::raw("strftime('%W', updated_at)"), str_pad($now->weekOfYear, 2, '0', STR_PAD_LEFT))
            ->exists();
    }
}
