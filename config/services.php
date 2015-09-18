<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

    'twitter' => [
        'api_key'    => 'QwreYnWZZ1jCMHRjswsf8q33G',
        'api_secret' => 'rIHJGLDcNfexp9rJs4dwwuHK97cx8MbphrB5wl4O3icGyS3uDA',
        'redirect_url'  => 'http://www.laravel.local/oauth'
    ],

];
