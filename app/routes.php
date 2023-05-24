<?php

$routes = [
    'home' => [
        'path' => '/',
        'controller' => 'HomeController',
        'method' => 'index'
    ],
    'article' => [
        'path' => '/article',
        'controller' => 'ArticleController',
        'method' => 'index'
    ],
    'category' => [
        'path' => '/category',
        'controller' => 'CategoryController',
        'method' => 'index'
    ],
    'ajax-save-article' => [
        'path' => '/saveArticle',
        'controller' => 'ArticleController',
        'method' => 'saveArticle'
    ],
    'profile' => [
        'path' => '/profile',
        'controller' => 'UserController',
        'method' => 'showProfile'
    ],
    'signup' => [
        'path' => '/signup',
        'controller' => 'UserController',
        'method' => 'signup'
    ],
    'login' => [
        'path' => '/login',
        'controller' => 'AuthController',
        'method' => 'login'
    ],
    'logout' => [
        'path' => '/logout',
        'controller' => 'AuthController',
        'method' => 'logout'
    ],
    'admin_dashboard' => [
        'path' => '/admin',
        'controller' => 'Admin\\AdminDashboardController',
        'method' => 'index'
    ],
    'admin_article_new' => [
        'path' => '/admin/article/new',
        'controller' => 'Admin\\AdminArticleController',
        'method' => 'new'
    ],
    'admin_article_edit' => [
        'path' => '/admin/article/edit',
        'controller' => 'Admin\\AdminArticleController',
        'method' => 'edit'
    ],
    'admin_article_delete' => [
        'path' => '/admin/article/delete',
        'controller' => 'Admin\\AdminArticleController',
        'method' => 'delete'
    ],
];

return $routes;