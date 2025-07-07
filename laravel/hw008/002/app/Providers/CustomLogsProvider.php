<?php

namespace App\Providers;

use App\Services\CustomLogsDbService;
use App\Services\CustomLogsServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class CustomLogsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CustomLogsServiceInterface::class, function () {
return new CustomLogsDbService(DB::table("logs"));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
