<?php
require_once('./configs/app.php');

$baseRoute = [
    '/404' => [
        'GET' => 'BaseController@page404'
    ]
];

$routes = include_once './routes.php';

$routes = array_merge($routes, $baseRoute);

$route = array_keys($routes);

    

if (!in_array($path, $route) ) {
    redirect('/404');
    die;
}

$controllers = $routes[$path];
foreach ($controllers as $method => $controller) {
    if ($requestMethod == $method) {
        list($controller, $action) = explode('@', $controller);
        include_once('controllers/' . $controller . '.php');
        $controller = new $controller;
        $controller->$action();
    }
}

function redirect($path)
{
    header("Location: $path");
}