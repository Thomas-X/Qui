<?php

use Qui\lib\App;
use Qui\lib\facades\Router;
use Qui\lib\Routes;
use Qui\lib\Request;
use Qui\lib\Response;

/*
 *
 * No middleware routes should be placed before middleware routes (is nice)
 *
 * */

/*
 * GET
 * */
Router::get(Routes::$routes['home'], 'HomeController@showHome');

/*
 * POST
 * */
// unprotected always available post routes go here, otherwise use middelware

/*
 *
 * MIDDLEWARE
 *
 * */

/*
 * Forgot password token verification middleware
 * */
Router::middleware(['AuthenticationMiddleware@resetPassword'], [
    [
        App::GET,
        Routes::$routes['resetPassword'],
        'AuthenticationController@showResetPassword'
    ],
    [
        App::POST,
        Routes::$routes['resetPassword'],
        'AuthenticationController@onResetPassword'
    ]
]);

/*
 * Should be logged in middleware
 * */
Router::middleware(['AuthenticationMiddleware@shouldBeLoggedIn'], [
    [
        App::GET,
        Routes::$routes['logout'],
        'AuthenticationController@onLogout'
    ]
]);

/*
 * Should not be logged in middleware
 * */
Router::middleware(['AuthenticationMiddleware@shouldNotBeLoggedIn'], [
    [
        App::GET,
        Routes::$routes['login'],
        'AuthenticationController@showLogin'
    ],
    [
        App::GET,
        Routes::$routes['register'],
        'AuthenticationController@showRegister'
    ],
    [
        App::GET,
        Routes::$routes['forgotPassword'],
        'AuthenticationController@showForgotPassword'
    ],
    [
        App::POST,
        Routes::$routes['login'],
        'AuthenticationController@onLogin'
    ],
    [
        App::POST,
        Routes::$routes['onRegister'],
        'AuthenticationController@onRegister'
    ],
    [
        App::POST,
        Routes::$routes['forgotPassword'],
        'AuthenticationController@onForgotPassword'
    ]
]);
