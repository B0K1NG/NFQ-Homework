<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'articles_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/articles']], [], [], []],
    'articles_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/articles']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\IndexController::list'], [], [['text', '/']], [], [], []],
    'article_view' => [['id'], ['_controller' => 'App\\Controller\\ViewController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
