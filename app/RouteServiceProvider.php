<?php
require_once('./configs/app.php');

$routes = include_once './routes.php';

$route = array_keys($routes);
if (!in_array($path, $route) ) {
    echo '404 PAGE';
    die;
}

$controllers = $routes[$path];
foreach ($controllers as $method => $controller) {

    list($controller, $action) = explode('@', $controller);
//$controller == PostsController
//$action = index
    include_once('controllers/' . $controller . '.php');
    $controller = new $controller;

    $controller->$action();
}
