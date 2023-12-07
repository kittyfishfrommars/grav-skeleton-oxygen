<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/tikkun/user/plugins/form/form.yaml',
    'modified' => 1700491273,
    'size' => 1727,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'debug' => false,
        'inline_errors' => false,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ],
        'turnstile' => [
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ],
        'basic_captcha' => [
            'type' => 'characters',
            'chars' => [
                'length' => 6,
                'font' => 'zxx-noise.ttf',
                'bg' => '#cccccc',
                'text' => '#333333',
                'size' => 24,
                'start_x' => 5,
                'start_y' => 30,
                'box_width' => 135,
                'box_height' => 40
            ],
            'math' => [
                'min' => 1,
                'max' => 12,
                'operators' => [
                    0 => '+',
                    1 => '-',
                    2 => '*'
                ]
            ]
        ]
    ]
];
