<?php
$includeRoot = '_partials.widgets.properties.';
$instantQuoteRoot = $includeRoot . 'InstantQuote.';
$rateComparisonRoot = $includeRoot . 'RateComparison.';
$liveRateBoardRoot = $includeRoot . 'LiveRateBoard.';

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

$suspendedCurrencyText = [
    'displayName' => 'Suspended currency text',
    'default' => '"This currency is temporarily unavailable."',
    'descriptionIncludePath' => $includeRoot . 'optional.suspended_currency_text',
];

return [
    'InstantQuote' => [
        'recommended' => true,
        'properties' => [
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
                    'suspended_currency_text' => $suspendedCurrencyText,
                ]),
            ],
            'render' => [
                'optional' => [
                    'referral_code' => [
                        'displayName' => 'Referral code',
                        'default' => 'null',
                        'descriptionIncludePath' => $instantQuoteRoot . 'optional.referral_code',
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
                    'spend' => [
                        'displayName' => 'Spend amount',
                        'default' => 750,
                        'descriptionIncludePath' => $instantQuoteRoot . 'optional.spend',
                    ],
                ]
            ]
        ],
    ],
    'RateComparison' => [
        'properties' => [
            'standard' => [
                'required' => $default,
                'optional' => array_merge($banner, [
                    'alternate_currency_text' => [
                        'displayName' => 'Alternative currency message',
                        'default' => '{target_currency_name} ({target_currency_code}) is not currently available so we are showing the FCO recommended alternative, {alternate_currency_name} ({alternate_currency_code}).',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.alternate_currency_text',
                    ],
                    'button_text' => [
                        'displayName' => 'Button text',
                        'default' => '"Buy now"',
                        'descriptionIncludePath' => $includeRoot . 'optional.button_text',
                    ],
                    'button_url_add_currency_code_field' => [
                        'displayName' => 'Button url currency parameter',
                        'default' => 'null',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.button_url_add_currency_code_field',
                    ],
                    'comparison_amount' => [
                        'displayName' => 'Comparison amount',
                        'default' => '2500',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.comparison_amount',
                    ],
                    'default_currency_text' => [
                        'displayName' => 'Default currency message',
                        'default' => '({target_currency_code}) is not currently available and there is no FCO recommended alternative so we are showing you our most popular currency, {default_currency_name} ({default_currency_code}).',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.default_currency_text',
                    ],
                    'error_message' => $errorMessage,
                    'poll_frequency' => [
                        'displayName' => 'Polling frequency',
                        'default' => '10000 milliseconds (10 seconds)',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.poll_frequency',
                    ],
                    'results_message' => [
                        'displayName' => 'Saving message',
                        'default' => 'false',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.results_message',
                    ],
                    'scroll_pause' => [
                        'displayName' => 'Scroll pause',
                        'default' => '2000 milliseconds (2 seconds)',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.scroll_pause',
                    ],
                    'scroll_speed' => [
                        'displayName' => 'Scroll speed',
                        'default' => '3000 milliseconds (3 seconds)',
                        'descriptionIncludePath' => $rateComparisonRoot . 'optional.scroll_speed',
                    ],
                    'suspended_currency_text' => $suspendedCurrencyText,
                ]),
            ],
            'render' => [
                'optional' =>[
                    'currencies' => [
                        'displayName' => 'Currencies',
                        'default' => 'null',
                        'descriptionIncludePath' => $rateComparisonRoot . 'currencies',
                    ],
                ],
            ],
        ],
    ],
    'LiveRateBoard' => [
        'properties' => [
            'standard' => [
            'required' => $default,
            'optional' => array_merge($banner, [
                'button_text' => [
                    'displayName' => 'Button text',
                    'default' => '"Get an instant quote"',
                    'descriptionIncludePath' => $includeRoot . 'optional.button_text',
                ],
                'error_text' => $errorMessage,
                'heading_text' => [
                    'displayName' => 'Heading text',
                    'default' => '"Live Rates"',
                    'descriptionIncludePath' => $liveRateBoardRoot . 'optional.heading_text',
                ],
                'refresh_interval' => [
                    'displayName' => 'Refresh interval',
                    'default' => '5000 milliseconds (5 seconds)',
                    'descriptionIncludePath' => $liveRateBoardRoot . 'optional.refresh_interval',
                ],
                'suspended_currency_text' => $suspendedCurrencyText,
                'visible_rows' => [
                    'displayName' => 'Visible rows',
                    'default' => '4',
                    'descriptionIncludePath' => $liveRateBoardRoot . 'optional.visible_rows',
                ],
            ]),
        ],
        ],
    ],
];
