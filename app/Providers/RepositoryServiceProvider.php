<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\NewsRepositoryInterface;
use App\Repositories\MockNewsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(NewsRepositoryInterface::class, MockNewsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
