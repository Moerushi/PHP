<?php

namespace App\Providers;

use App\Events\NewsCreated;
use App\Listeners\SendNewsNotification;
use App\Listeners\SendNewsToRemoteServer;
use App\Models\News;
use App\Observers\NewsObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            NewsCreated::class,
            SendNewsToRemoteServer::class
        );

        Event::listen(
            NewsCreated::class,
            SendNewsNotification::class
        );

        News::observe(NewsObserver::class);
    }
}
