<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/oauth' => [[['_route' => 'oauth', '_controller' => 'App\\Controller\\DefaultController::oauth'], null, null, null, false, false, null]],
        '/exchange_token' => [[['_route' => 'exchange_token', '_controller' => 'App\\Controller\\DefaultController::token'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\DefaultController::error'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/top(?'
                    .'|tracks/([^/]++)(*:29)'
                    .'|artist/([^/]++)(*:51)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:87)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'toptracks', '_controller' => 'App\\Controller\\DefaultController::toptracks'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'topartist', '_controller' => 'App\\Controller\\DefaultController::topartist'], ['id'], null, null, false, true, null]],
        87 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
