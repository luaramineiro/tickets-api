<?php

return [
    'defaults' => [
        'guard' => 'tickets',
        'passwords' => 'users',
    ],

    'guards' => [
        'tickets' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Models\User::class
        ]
    ]
];
