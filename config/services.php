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

    'google' => [
        'client_id'     => '448723481424-coob6jtou34qrhcnpoja9lmfet26llj2.apps.googleusercontent.com',
        'client_secret' => '8AviW5gPy8FhaAs8QWB3sks9',
        'redirect'      => 'http://fan-tastic.dev/auth/google/callback',
    ],

    'twitter' => [
        'client_id'     => 'Ly9IhQvxWnlbqUKaogNiZb6c4',
        'client_secret' => 'UwNQN0sfiZmyV2bu7Y82goIObSmXKZh8zI3fNTLn7yiixxLJzk',
        'redirect'      => 'http://fan-tastic.dev/auth/twitter/callback',
    ],

    'facebook' => [
        'client_id'     => '302693393506417',
        'client_secret' => '89d6fe3163294d4fe871d5aafdd549b7',
        'redirect'      => 'http://fan-tastic.dev/auth/facebook/callback',
    ],

];
