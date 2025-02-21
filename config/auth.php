<?php

return [

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users', // Provide the users provider
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users', // Provide the users provider
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class, // Reference the User model
        ],
    ],

];
