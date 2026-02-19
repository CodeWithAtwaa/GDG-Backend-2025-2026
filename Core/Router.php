<?php

namespace Core;

class Router
{

    protected $routes = [];
    public function add($uri, $controller, $method)
    {
        $method = strtoupper($method);
        if (!isset($this->routes[$method])) {
            $this->routes[$method] = [];
        }

        $this->routes[$method][$uri] = $controller;
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function  patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }
    protected function abort($value = 404)
    {
        http_response_code($value);
        require base_path("views/page_404.php");
        exit();
    }

    public function route($uri, $method)
    {
        $method = strtoupper($method);
        if (isset($this->routes[$method][$uri])) {
            $controller = $this->routes[$method][$uri];
            return require base_path($controller);
        }

        $this->abort();
    }
}


