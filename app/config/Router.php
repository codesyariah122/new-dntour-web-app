<?php
namespace app\config;

use app\controllers\{HomeController, BlogController, NotFoundController};

class Router {

    private $home, $blog, $nofound;

    public function __construct()
    {
        $this->home = new HomeController;
        $this->blog = new BlogController;
        $this->nofound = new NotFoundController;
    }
    
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];  
        $parts = parse_url($url);
        $path = trim($parts['path'], '/');

        if($path !== "") {
            $slug = basename($path);
            
            if($slug !== 'blog'):
                $base_blog = "blog/{$slug}";

                if($path === $base_blog) {
                    $this->blog->detail($slug);
                } else {
                    http_response_code(404);
                    $this->nofound->run();
                }

            else:
                if($parts['path'] !== '/blog') {   
                    http_response_code(404);
                    $this->nofound->run();
                } else {
                    $this->blog->index();
                }
            endif;

        } else {

            if($url !== '/' && $url !== 'home') {
                http_response_code(404);
            }
            
            $this->home->index();
        }

    }
}