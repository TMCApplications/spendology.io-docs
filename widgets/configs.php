<?php
$includeRoot = '_partials.widgets.properties.';

$default = [
    'api_url' => [
        'displayName' => 'Api url',
        'descriptionIncludePath' => $includeRoot. 'api_url',
    ],
    'button_url' => [
        'displayName' => 'Button url',
        'descriptionIncludePath' => $includeRoot. 'button_url',
    ],
    'selector' => [
        'displayName' => 'Selector',
        'descriptionIncludePath' => $includeRoot. 'selector',
    ],
];

return [
    'InstantQuote' => [
        'standard' => [
            'required' => array_merge($default, [

            ]),
            'optional' => [
                'delivery_text' => [
                    'displayName' => 'Delivery text',
                    'default' => 'null',
                    'descriptionIncludePath' => $includeRoot. 'InstantQuote.optional.delivery_text'
                ],
                'footer_text' => [
                    'displayName' => 'Footer text',
                    'default' => 'null',
                    'descriptionIncludePath' => $includeRoot. 'InstantQuote.optional.footer_text'
                ],
            ]
        ],
    ]
];
