<?php

require('../core/helpers.php');

spl_autoload_register(function ($class) {

    $position = strripos($class, '\\');

    $namespace = substr($class, 0, $position);
    $classname = substr($class, $position + 1);

    $path = strtolower($namespace);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);

    $filename = '../' .$path . DIRECTORY_SEPARATOR . $classname . '.php';

    if(file_exists($filename)) {
        require($filename);
    }

});
use Core\Router;
foreach (file("../.env") as $env) {
    putenv(trim($env));
}

$host = getenv('DB_HOST');
$router = new Router;
$router->toController();