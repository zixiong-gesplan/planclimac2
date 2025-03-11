<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Visitor;


class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(NewsRepositoryInterface::class, SQLiteNewsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        // $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);
        // View::share('visitorCount',Visitor::count());
    }
}
