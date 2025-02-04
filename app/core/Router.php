<?php

namespace App\Core;

class Router
{
    private $routes = [];
    
    public function addRoute($url, $controller, $method)
    {
        $this->routes[$url] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function dispatch()
    {
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $url = $url ?: 'home';

        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $method = $this->routes[$url]['method'];

            $controllerClass = "App\\Controllers\\{$controller}";
            if (class_exists($controllerClass)) {
                $controllerInstance = new $controllerClass();

                if (method_exists($controllerInstance, $method)) {
                    $controllerInstance->$method();
                } else {
                    http_response_code(404);
                    echo "404 - Méthode non trouvée";
                }
            } else {
                http_response_code(404);
                echo "404 - Controleur non trouvé";
            }
        } else {
            http_response_code(404);
            echo "404 - Page non trouvée";
        }
    }
}
