<?php

namespace MF\Init;

class Bootstrap
{
    private $routes;

    protected function __contructor()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    protected function getRoutes()
    {
        return $this->routes;
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function run($url)
    {
        foreach ($this->getRoutes() as $path => $route) {
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];

                $controller->action();
            }
        }
    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}