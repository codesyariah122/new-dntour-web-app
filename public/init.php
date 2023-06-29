<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return Router
 * @param className
**/

spl_autoload_register(function($className) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $classFile = $classPath . '.php';

     if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// Inisialisasi Router
use app\config\Router;
$router = new Router;

// Menambahkan rute ke router
$router->get('/', 'HomeController@index');
$router->get('/blog', 'BlogController@index');
$router->get('/blog/{slug}', 'BlogController@detail');

// Jalankan router
$router->run();