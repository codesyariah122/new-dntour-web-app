<?php
require_once 'app/config/Autoload.php';

/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return Router
 * @param className
**/

// Inisialisasi Router
use app\config\Router;
$app = new Router;

// Menambahkan rute ke router
$app->group('home', function ($app) {
    $app->get('/', 'HomeController@index');
    $app->get('/blog', 'BlogController@index');
    $app->get('/blog/{slug}', 'BlogController@detail');
});

// Jalankan router
$app->run();