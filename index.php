<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param init file
**/


$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '');

if ($uri !== '/' && file_exists(__DIR__.'/public/init.php')) {
    return false;
}
require_once(dirname(__FILE__)) .'/public/init.php';