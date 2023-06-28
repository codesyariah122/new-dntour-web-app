<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return __constructor
**/

spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    $file = $class . '.php';

    if ( !file_exists($file) ) {
        echo "<h1>File not exists {$file} </h1>";
    }

    require_once $file;
});

use app\config\Router;

$init = new Router;

$init->run();