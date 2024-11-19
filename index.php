<?php

spl_autoload_register(function ($class) {
    include 'controller/' . $class . '.php';
});

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
$controller = ucfirst($uri[1]);
$action = $uri[2];

$link = "/controller/" . $controller . ".php";

$render = new Film();
$render->$action();
