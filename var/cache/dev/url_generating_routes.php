<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'oauth' => [[], ['_controller' => 'App\\Controller\\DefaultController::oauth'], [], [['text', '/oauth']], [], []],
    'exchange_token' => [[], ['_controller' => 'App\\Controller\\DefaultController::token'], [], [['text', '/exchange_token']], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\DefaultController::error'], [], [['text', '/error']], [], []],
    'toptracks' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::toptracks'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/toptracks']], [], []],
    'topartist' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::topartist'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/topartist']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];