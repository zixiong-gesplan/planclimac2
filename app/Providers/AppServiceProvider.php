<?php

namespace App\Providers;

use App\Interfaces\NewsRepositoryInterface;
use App\Repositories\SQLiteNewsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(NewsRepositoryInterface::class, SQLiteNewsRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        session()->put('locale', 'es');
        app()->setLocale(session()->get('locale'));
    }
}
