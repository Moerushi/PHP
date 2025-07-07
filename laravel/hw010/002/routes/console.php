<?php

use App\Jobs\SyncNews;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function(){
Log::info('Callback executed!');
})->everyMinute();

Schedule::command('app:app-dunp-database')->everyMinute();

Schedule::job(new SyncNews(15))->everyMinute();

Schedule::exec('touch routes/test.txt')->everyMinute();
