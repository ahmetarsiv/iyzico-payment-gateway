<?php

return [
    [
        'key'    => 'sales.payment_methods.iyzico',
        'info'   => 'iyzico::app.iyzico.info',
        'name'   => 'iyzico::app.iyzico.name',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'iyzico::app.iyzico.system.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'title',
                'title'         => 'iyzico::app.iyzico.system.title',
                'type'          => 'text',
                'depends'        => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'iyzico::app.iyzico.system.description',
                'type'          => 'textarea',
                'depends'       => 'active:1',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'image',
                'title'         => 'iyzico::app.iyzico.system.image',
                'type'          => 'file',
                'info'          => 'admin::app.configuration.index.sales.payment-methods.logo-information',
                'depends'       => 'active:1',
                'channel_based' => false,
                'locale_based'  => true,
                'validation'    => 'mimes:bmp,jpeg,jpg,png,webp',
            ], [
                'name'          => 'api_key',
                'title'         => 'API Anahtarı',
                'info'          => 'api anahtarı',
                'type'          => 'text',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'secret_key',
                'title'         => 'Gizli Anahtar',
                'info'          => 'gizli anahtar',
                'type'          => 'password',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'          => 'sandbox',
                'title'         => 'Sandbox',
                'type'          => 'boolean',
                'depends'       => 'active:1',
                'channel_based' => true,
                'locale_based'  => false,
            ], [
                'name'    => 'sort',
                'title'   => 'admin::app.configuration.index.sales.payment-methods.sort-order',
                'type'    => 'select',
                'depends' => 'active:1',
                'options' => [
                    [
                        'title' => '1',
                        'value' => 1,
                    ], [
                        'title' => '2',
                        'value' => 2,
                    ], [
                        'title' => '3',
                        'value' => 3,
                    ], [
                        'title' => '4',
                        'value' => 4,
                    ], [
                        'title' => '5',
                        'value' => 5,
                    ], [
                        'title' => '6',
                        'value' => 6,
                    ], [
                        'title' => '7',
                        'value' => 7,
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => false,
            ],
        ],
    ],
];
