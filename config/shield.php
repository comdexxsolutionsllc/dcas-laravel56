<?php

return [
    'services' => [
        'github' => [
            'driver' => \Shield\GitHub\GitHub::class,
            'options' => [
                'token' => env('GITHUB_SECRET', 'your-custom-mailgun-secret'),
            ],
        ],
        'mailgun' => [
            'driver' => \Shield\Mailgun\Mailgun::class,
            'options' => [
                'token' => env('MAILGUN_SECRET', 'your-custom-mailgun-secret'),
                'tolerance' => 300,
            ],
        ],
        'stripe' => [
            'driver' => \Shield\Stripe\Stripe::class,
            'options' => [
                'secret' => env('STRIPE_SECRET', 'your-custom-stripe-secret'),
                'tolerance' => 300,
            ],
        ],
    ],
];
