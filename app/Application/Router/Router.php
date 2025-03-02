<?php

namespace App\Application\Router;

class Router implements RouterInterface
{

    public function handle(array $routes): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        if ($requestMethod === 'POST') {
            echo 'tessst';
        } else {
            $filteredRoutes = array_filter($routes, function ($route) {
                return $route['type'] === 'page';
            });
            foreach ($routes as $route) {
                if ($route['uri'] === $uri) {
                    $controller = new $route['controller']();
                    $method = $route['method'];
                    $controller->$method();
                }
            }
        }
    }
}