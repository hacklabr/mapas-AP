<?php

return [
    'Analytics',
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
    ],
    'SpamDetector',
    'AdminLoginAsUser',
    'Zammad' => [
            'namespace' => 'Zammad',
            'config' => [
                'url' => '',
                'enabled' => true,
            ]
        ],
    'MapasBlame' => [
        'namespace' => 'MapasBlame',
        'config' => [
            'request.logData.PATCH' => function ($data) {
                return $data;
            },
        ]
    ],
];