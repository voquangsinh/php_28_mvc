<?php

$controllers = include_once './routes.php';

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

include_once('controllers/' . ucwords($controller) . 'Controller.php');
$klass = ucwords($controller) . 'Controller';
$controller = new $klass;
$controller->$action();
