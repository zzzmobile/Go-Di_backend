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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [ 
                'client_id' => env ('FB_CLIENT_ID', '219019348645053' ),
                'client_secret' => env ('FB_CLIENT_SECRET', '9f0f69aa46228f8dcde2f47f89a7e835' ),
                'redirect' => env ('FB_REDIRECT', 'http://appsinvo.com/qwikfarm/public/callback/facebook') 
        ],

    'google' => [
                'client_id' => '730411581175-3i8gigon4stbh3pippb65a1up2n9qv8e.apps.googleusercontent.com',
                'client_secret' => 'tZK8dRqXy6Nv5Vqia32BucsK',
                'redirect' => 'http://appsinvo.com/qwikfarm/public/login/google/callback',
        ],
    'twitter' => [
                'client_id' => 'Lx0sKl5yHTojBwQsRZYeZO0Ea',
                'client_secret' => 'ZhWfgpbgMa0ozuXMswlBmaJmnZSSHNa9gyNQc5rkHI5YvLexby',
                'redirect' => 'http://localhost/appsinvo/Xperiii/public/login/twitter/callback',
        ],

];
