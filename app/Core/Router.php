<?php
namespace App\Core;

class Router {
    private $routes = [];
    
    public function add($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }
    
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                $controllerClass = $route['controller'];
                $controller = new $controllerClass();
                $action = $route['action'];
                return $controller->$action();
            }
        }
        
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
