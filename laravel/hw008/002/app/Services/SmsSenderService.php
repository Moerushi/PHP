<?php

namespace App\Services;

use Twilio\Rest\Client as TwilioClient;

class SmsSenderService implements SmsSenderInterface
{
    protected $client;

    public function __construct($sid, $token)
    {
        $this->client = new TwilioClient($sid, $token);
    }

    public function send($message)
    {
        $this->client->messages->create(
            777777777777,
            [
                'from' => 777777777,
                'body' => 'New message'
            ]
        );
    }
}
