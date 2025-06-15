<?php

namespace App\Providers;

use App\Listeners\NewsHiddenListener;
use App\Models\News;
use App\Observers\NewsObserver;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        NewsHidden::class => [
            NewsHiddenListener::class,
        ],
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        News::observe(NewsObserver::class);
    }
}
