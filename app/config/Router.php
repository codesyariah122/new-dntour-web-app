<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return $_SERVER
 * @param $handler
**/

namespace app\config;
use app\controllers\{NotFoundController};

class Router {
    private $routes = [], $notfound;

    public function __construct()
    {
        $this->notfound = new NotFoundController;
    }

    private function addRoute($method, $route, $handler): void {
        $paramPattern = ($method === 'GET') ? '{slug}' : '{dataParam}';
        $route = str_replace($paramPattern, '([^/]+)', $route);
        $this->routes[$route] = $handler;
    }

    public function group($prefix, $callback): void {
        $callback($this);
    }

    public function get($route, $handler) {
       $this->addRoute('GET', $route, $handler);
    }

    public function run() {
        $uri = $_SERVER['REQUEST_URI'];

        $uri = strtok($uri, '?');

        foreach ($this->routes as $route => $handler) {
            if (preg_match('#^' . $route . '$#', $uri, $matches)) {

                array_shift($matches);

                $handlerParts = explode('@', $handler);
                $controllerName = $handlerParts[0];
                $methodName = $handlerParts[1];

                $controllerNamespace = 'app\controllers\\' . $controllerName;
                $controller = new $controllerNamespace();

                call_user_func_array([$controller, $methodName], $matches);

                return;
            }
        }

        http_response_code(404);

        header("HTTP/1.0 404 Not Found");

        $this->notfound->run();
    }
}