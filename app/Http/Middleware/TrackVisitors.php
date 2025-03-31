<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        if($ip != '127.0.0.1'){
            $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
            $visitor->increment('visits');
            $visitor->save();
        }
        return $next($request);
    }
}
