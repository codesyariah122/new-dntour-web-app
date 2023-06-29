<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return $_SERVER
 * @param $handler
**/

namespace app\config;

class Router {
    private $routes = [];

    public function get($route, $handler) {
        $this->routes[$route] = $handler;
    }

    public function run() {
        $uri = $_SERVER['REQUEST_URI'];

        // Menghapus query string dari URI
        $uri = strtok($uri, '?');

        // Mencocokkan URI dengan daftar rute
        foreach ($this->routes as $route => $handler) {
            // Mencocokkan pola rute dengan URI
            if (preg_match('#^' . $route . '$#', $uri, $matches)) {
                // Menghapus elemen pertama ($matches[0]) yang berisi URI lengkap
                array_shift($matches);

                // Memisahkan handler menjadi nama kontroler dan metode
                $handlerParts = explode('@', $handler);
                $controllerName = $handlerParts[0];
                $methodName = $handlerParts[1];

                // Membuat instance kontroler
                $controllerNamespace = 'app\controllers\\' . $controllerName;
                $controller = new $controllerNamespace();

                // Memanggil metode pada kontroler dengan argumen yang cocok dari URI
                call_user_func_array([$controller, $methodName], $matches);

                return;
            }
        }

        // Jika tidak ada cocokan rute, tampilkan halaman 404
        http_response_code(404);

        header("HTTP/1.0 404 Not Found");

        echo 'Halaman tidak ditemukan';
    }
}