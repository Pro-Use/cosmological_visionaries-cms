<?php
    return [
        'debug' => true,
        'kql' => [
            'auth' => 'bearer'
        ],
        'headless' => [
            'token' => 'Jg208;rir!-c',
            'cors' => [
                'allowOrigin' => '*',
                'allowMethods' => 'GET, POST, OPTIONS',
                'allowHeaders' => 'Accept, Content-Type, Authorization, X-Language',
                'maxAge' => '86400',
            ]
        ]
    ];