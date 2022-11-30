<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Spendology Docs',
    'siteHeadingLead' => 'Travel money the Spendology way.',
    'siteHeadingEnd' => 'All of the profit, none of the headache.',
    'siteDescription' => 'We always have an exciting plan of new technologies in development to wow your customers and'
        . ' as soon as they are launched, they are yours too.',

    // Algolia DocSearch credentials
    'docsearchApiKey' => 'TBD',
    'docsearchAppId' => 'TBD',
    'docsearchIndexName' => 'TBD',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },

    // widgets
    'widgets' => [
        'configs' => require_once('widgets/configs.php'),
    ],
];
