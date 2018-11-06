<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 09/10/18
 * Time: 20:03
 */

namespace Qui\lib;


class Routes
{
    static public $routePrefix = "";
    static public $routes = [
        'home' => '/',
        'login' => '/login',
        'logout' => '/logout',
        'register' => '/register',
        'onRegister' => '/register',
        'resetPassword' => '/resetpassword',
        'forgotPassword' => '/forgotpassword',
    ];

    public static function morphRoutes($path)
    {
        Routes::$routePrefix = $path;
        foreach (Routes::$routes as $key => $route) {
            Routes::$routes[$key] = $path . Routes::$routes[$key];
        }
    }
}