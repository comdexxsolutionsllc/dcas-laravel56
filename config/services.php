<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'campaign-monitor' => [
        'client_id' => env('CAMPAIGN_MONITOR_CLIENT_ID'),
        'daily_id'  => env('CAMPAIGN_MONITOR_DAILY_LIST_ID'),
        'key'       => env('CAMPAIGN_MONITOR_API_KEY'),
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret'  => env('SPARKPOST_SECRET'),
        'options' => [
            'endpoint' => env('SPARKPOST_ENDPOINT'),
        ],
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
];
