<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/articles' => [[['_route' => 'articles_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article(?'
                    .'|s/([^/]++)(*:28)'
                    .'|/([^/]++)(*:44)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:80)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'articles_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null]],
        44 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        80 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
