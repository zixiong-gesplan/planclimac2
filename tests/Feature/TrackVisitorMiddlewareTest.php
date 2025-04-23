<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Visitor;

class TrackVisitorMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Ruta temporal para probar el middleware
        Route::middleware(['web', \App\Http\Middleware\TrackVisitorMiddleware::class])
             ->get('/test-middleware', fn() => response('OK'));
    }

    public function test_it_tracks_daily_visits_for_normal_ips()
    {
        $ip = '192.168.1.1';

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
             ->get('/test-middleware')
             ->assertOk();

        $this->assertDatabaseHas('visitors', [
            'ip_address' => $ip,
            'visits' => 1,
        ]);

        // Segunda visita el mismo día, no se debe incrementar
        $this->get('/test-middleware');

        $this->assertEquals(1, Visitor::where('ip_address', $ip)->first()->visits);
    }

    public function test_it_tracks_weekly_visits_for_special_ip()
    {
        $ip = '85.52.32.190';

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
             ->get('/test-middleware')
             ->assertOk();

        $this->assertDatabaseHas('visitors', [
            'ip_address' => $ip,
            'visits' => 1,
        ]);

        // Otra visita la misma semana
        $this->get('/test-middleware');
        $this->assertEquals(1, Visitor::where('ip_address', $ip)->first()->visits);

        // Simular una semana después
        $visitor = Visitor::where('ip_address', $ip)->first();
        $visitor->updated_at = Carbon::now()->subWeek()->startOfWeek();
        $visitor->save();

        $this->get('/test-middleware');
        $this->assertEquals(2, Visitor::where('ip_address', $ip)->first()->visits);
    }

    public function test_it_ignores_localhost()
    {
        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])
             ->get('/test-middleware')
             ->assertOk();

        $this->assertDatabaseCount('visitors', 0);
    }
}
