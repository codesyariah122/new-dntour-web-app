<?php
namespace app\config;

use app\controllers\HomeController;
use app\controllers\BlogController;

class Router {

    private $home, $blog;

    public function __construct()
    {
        $this->home = new HomeController;
        $this->blog = new BlogController;
    }
    
    public function exec()
    {
        $url = $_SERVER['REQUEST_URI'];  
        $parts = parse_url($url);
        $path = trim($parts['path'], '/');

        if($path !== "") {
            $slug = basename($path);
            
            if($slug !== 'blog'):
                $this->blog->detail($slug);
            else:
                $this->blog->index();
            endif;

        } else {            
            switch($url):
                case '/':
                $this->home->index();
                break;

                case '/home':
                $this->home->index();
                break;

                default:
                http_response_code(404);
            endswitch;   
        }

    }
}