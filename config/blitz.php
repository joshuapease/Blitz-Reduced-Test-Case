<?php

use craft\helpers\App;
use putyourlightson\blitz\drivers\storage\YiiCacheStorage;

return [
    '*' => [
        // With this setting enabled, Blitz will log detailed messages to `storage/logs/blitz.log`.
        'debug' => true,

        // With this setting enabled, Blitz will provide template performance hints in a utility.
        'hintsEnabled' => true,

        // With this setting enabled, Blitz will begin caching pages according to the included/excluded URI patterns. Disable this setting to prevent Blitz from caching any new pages.
        'cachingEnabled' => false,

        // Determines when and how the cache should be refreshed.
        // - `0`: Expire the cache, regenerate manually or organically
        // - `1`: Clear the cache, regenerate manually or organically
        // - `2`: Expire the cache and regenerate in a queue job
        // - `3`: Clear the cache and regenerate in a queue job
        'refreshMode' => 1,

        // The URI patterns to include in caching. Set `siteId` to a blank string to indicate all sites.
        'includedUriPatterns' => [
            [
                'siteId' => 1,
                'uriPattern' => '.*',
            ],
        ],

        // The URI patterns to exclude from caching (overrides any matching patterns to include). Set `siteId` to a blank string to indicate all sites.
        'excludedUriPatterns' => [
            [
                'siteId' => 1,
                'uriPattern' => 'search',
            ],
        ],

        // The storage type to use.
        'cacheStorageType' => YiiCacheStorage::class,

        // The storage settings.
        // 'cacheStorageSettings' => [
        //     'folderPath' => '@storage/cache/blitz',
        // ],

        // Custom site URIs to generate when either a site or the entire cache is generated.
        //'customSiteUris' => [
        //    [
        //        'siteId' => 1,
        //        'uri' => 'pages/custom',
        //    ],
        //],

        // The purger type to use.
        // 'cachePurgerType' => 'putyourlightson\blitzcloudfront\CloudFrontPurger',

        // The purger settings (zone ID keys are site UIDs).
        // 'cachePurgerSettings' => [
        //     'apiKey' => App::env('S3_ACCESS_KEY_ID'),
        //     'apiSecret' => App::env('S3_SECRET_ACCESS_KEY'),
        //     'distributionId' => App::env('S3_CLOUDFRONT_DISTRIBUTION_ID'),
        // ],

        // // The purger type classes to add to the plugin’s default purger types.
        // 'cachePurgerTypes' => [
        //    'putyourlightson\blitzcloudfront\CloudFrontPurger',
        // ],

        // Whether URLs with query strings should be cached and how.
        // - `0`: Do not cache URLs with query strings
        // - `1`: Cache URLs with query strings as unique pages
        // - `2`: Cache URLs with query strings as the same page
        'queryStringCaching' => 0,

        // The query string parameters to include when determining if and how a page should be cached (regular expressions may be used).
        //'includedQueryStringParams' => [
        //    [
        //        'siteId' => '',
        //        'queryStringParam' => '.*',
        //    ],
        //],

        // The query string parameters to exclude when determining if and how a page should be cached (regular expressions may be used).
        //'excludedQueryStringParams' => [
        //    [
        //        'siteId' => '',
        //        'queryStringParam' => 'gclid',
        //    ],
        //    [
        //        'siteId' => '',
        //        'queryStringParam' => 'fbclid',
        //    ],
        //],

        // An API key that can be used via a URL (min. 16 characters).
        //'apiKey' => '',

        // Whether pages containing query string parameters should be generated.
        //'generatePagesWithQueryStringParams' => true,

        // Whether the cache should automatically be refreshed after a global set is updated.
        //'refreshCacheAutomaticallyForGlobals' => true,

        // Whether the cache should be refreshed when an element is moved within a structure.
        //'refreshCacheWhenElementMovedInStructure' => true,

        // Whether the cache should be refreshed when an element is saved but unchanged.
        //'refreshCacheWhenElementSavedUnchanged' => false,

        // Whether the cache should be refreshed when an element is saved but not live.
        //'refreshCacheWhenElementSavedNotLive' => false,

        // Whether non-HTML responses should be cached. With this setting enabled, Blitz will also cache pages that return non-HTML responses. If enabled, you should ensure that URIs that should not be caches, such as API endpoints, XML sitemaps, etc. are added as excluded URI patterns.
        //'cacheNonHtmlResponses' => false,

        // Whether elements should be cached in the database.
        //'trackElements' => true,

        // Whether element queries should be cached in the database.
        //'trackElementQueries' => true,

        // The amount of time after which the cache should expire (if not 0). See [[ConfigHelper::durationInSeconds()]] for a list of supported value types.
        //'cacheDuration' => 0,
    ],
    'staging' => [
        'cachingEnabled' => true,
    ],
    'production' => [
        'cachingEnabled' => true,
        'debug' => false,
        'hintsEnabled' => false,
    ],
];
