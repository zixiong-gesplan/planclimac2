<?php

namespace Tests\Feature;

use App\Http\Middleware\TrackVisitors;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class TrackVisitorMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Route::middleware(['web', TrackVisitors::class])
            ->get('/test-middleware', fn () => response('OK'));
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();

        parent::tearDown();
    }

    public function test_it_stores_an_ip_and_tracks_it_once_per_day(): void
    {
        $ip = '192.0.2.1';

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get('/test-middleware')
            ->assertOk();

        $this->assertDatabaseHas('visitors', ['ip_address' => $ip]);
        $lastVisit = Visitor::where('ip_address', $ip)->value('updated_at');

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get('/test-middleware')
            ->assertOk();

        $this->assertDatabaseCount('visitors', 1);
        $this->assertEquals($lastVisit, Visitor::where('ip_address', $ip)->value('updated_at'));
    }

    public function test_it_tracks_the_configured_special_ip_at_most_once_per_week(): void
    {
        $ip = '85.52.32.190';
        Carbon::setTestNow('2026-10-19 12:00:00');

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get('/test-middleware')
            ->assertOk();

        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get('/test-middleware')
            ->assertOk();

        $firstVisit = Visitor::where('ip_address', $ip)->value('updated_at');
        $this->assertSame('2026-10-19 12:00:00', $firstVisit->toDateTimeString());

        Carbon::setTestNow('2026-10-26 12:00:00');
        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get('/test-middleware')
            ->assertOk();

        $this->assertSame(
            '2026-10-26 12:00:00',
            Visitor::where('ip_address', $ip)->value('updated_at')->toDateTimeString(),
        );
    }

    public function test_it_ignores_localhost(): void
    {
        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])
            ->get('/test-middleware')
            ->assertOk();

        $this->assertDatabaseCount('visitors', 0);
    }
}
