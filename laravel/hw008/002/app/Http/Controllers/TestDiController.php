<?php

namespace App\Http\Controllers;

use App\Services\CustomLogsServiceInterface;
use App\Services\SmsSenderInterface;
use Illuminate\Http\Request;

class TestDiController extends Controller
{
    public function showUrl(Request $request, CustomLogsServiceInterface $customLogs) {
        echo $request->getUri();
        $customLogs->rotateLogs();
    }

    public function sendSms (SmsSenderInterface $sender) {
      $sender->send('Hello world');
    }
}
