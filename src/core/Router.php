<?php

namespace Core;

class Router
{
    protected $routes;
    protected $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->uri = '/'. trim($this->uri, '/');
        $this->uri = parse_url($this->uri, PHP_URL_PATH);

        $this->routes = require('../app/routes.php');
    }

    protected function getPattern($route)
    {
        $patterns = [
            '{alphanum}' => '([a-z0-9\-]+)',
            '{num}' => '([0-9]+)'
        ];
        $pattern = str_replace(array_keys($patterns), $patterns, $route);

        $pattern = '#^/'. ltrim($pattern, '/') .'$#i';

        return $pattern;
    }

    public function toController()
    {
        foreach ($this->routes as $route => $target) {
            if (preg_match($this->getPattern($route), $this->uri, $matches) === 1) {

                array_shift($matches);  // remove the first element which is the full match
                list($controllerName, $methodName) = explode('.', $target);

                $controllerName = 'App\Controllers\\'. ucfirst($controllerName) .'Controller';
                $controller = new $controllerName;
                $controller->{$methodName}(...$matches);     // call the method by the name found in the route
                break;
            }
        }
        if(!isset($controller)) {
            require('../app/views/404.php');
        }


    }
}