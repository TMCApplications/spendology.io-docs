<?php
$includeRoot = '_partials.widgets.properties.';
$instantQuoteRoot = $includeRoot . 'InstantQuote.';
$rateComparisonRoot = $includeRoot . 'RateComparison.';

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

$banner = [
    'banner_link' => [
        'displayName' => 'Banner link',
        'default' => '""',
        'descriptionIncludePath' => $includeRoot . 'optional.banner_link',
    ],
    'banner_text' => [
        'displayName' => 'Banner text',
        'default' => '""',
        'descriptionIncludePath' => $includeRoot . 'optional.banner_text',
    ],
    'banner_visible' => [
        'displayName' => 'Banner visible',
        'default' => 'false',
        'descriptionIncludePath' => $includeRoot . 'optional.banner_visible',
    ],
];

$errorMessage = [
    'displayName' => 'Error message',
    'default' => '"Whoops! Something went wrong please contact us for help or click the retry button below."',
    'descriptionIncludePath' => $includeRoot . 'optional.error_message',
];

return [
    'InstantQuote' => [
        'standard' => [
            'required' => $default,
            'optional' => array_merge($banner, [
                'button_text' => [
                    'displayName' => 'Button text',
                    'default' => '"Get it now!"',
                    'descriptionIncludePath' => $includeRoot . 'optional.button_text',
                ],
                'capture_travel_information' => [
                    'displayName' => 'Capture travel information',
                    'default' => 'false',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.capture_travel_information'
                ],
                'delivery_text' => [
                    'displayName' => 'Delivery text',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.delivery_text',
                    'recommended' => true,
                ],
                'error_message' => $errorMessage,
                'footer_text' => [
                    'displayName' => 'Footer text',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.footer_text',
                    'recommended' => true,
                ],
                'heading_text' => [
                    'displayName' => 'Heading text',
                    'default' => '"Get an Instant Quote"',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.heading_text',
                ],
                'max_gbp' => [
                    'displayName' => 'Maximum quote amount',
                    'default' => 2500,
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.max_gbp',
                ],
                'min_gbp' => [
                    'displayName' => 'Minimum quote amount',
                    'default' => 100,
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.min_gbp',
                ],
                'saving_text' => [
                    'displayName' => 'Saving text',
                    'default' => '""',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.saving_text',
                ],
                'onSubmit' => [
                    'displayName' => 'Submit callback function',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.on_submit',
                ],
                'selected_currency' => [
                    'displayName' => 'Selected currency',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.selected_currency',
                ],
                'selected_departure' => [
                    'displayName' => 'Selected departure',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.selected_departure',
                ],
                'selected_destination' => [
                    'displayName' => 'Selected destination',
                    'default' => 'null',
                    'descriptionIncludePath' => $instantQuoteRoot . 'optional.selected_destination',
                ],
            ]),
        ],
    ],
    'RateComparison' => [
        'standard' => [
            'required' => $default,
            'optional' => array_merge($banner, [
                'button_text' => [
                    'displayName' => 'Button text',
                    'default' => '"Buy now"',
                    'descriptionIncludePath' => $includeRoot . 'optional.button_text',
                ],
                'error_message' => $errorMessage,
            ]),
        ],
        'render' => [
            'required' =>[
                'currencies' => [
                    'displayName' => 'Currencies',
                    'default' => 'null',
                    'descriptionIncludePath' => $rateComparisonRoot . 'currencies',
                ],
            ],
        ],
    ],
];
