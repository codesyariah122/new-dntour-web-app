<?php
// NotFoundController.php
namespace app\controllers;

use app\models\WebApp;
use app\helpers\{Helpers};

class NotFoundController {

    public $helpers, $env;
    
    private static function views($layout, $param)
    {
        $model = new WebApp();
        $data = $model->getData();
        $meta = $model->getMetaTag($param['title']);
        $contents = $model::getPartials($param['page']);
        $partials = $model->getPartials($param['page']);

        extract([$contents, $partials]);

        ob_start();
        require_once $param['view'];
        $content = ob_get_clean();
        ob_start();
        require_once $layout;
        $output = ob_get_clean();

        echo $output;
    }

    public function run() {
        // Halaman not found
        header("HTTP/1.0 404 Not Found");

        $layout = 'app/views/layout/AppLayout.php';
        $view = 'app/views/404.php';

        $data = [
           'title' => "404 Not Found",
           'page' => '404',
            'view' => $view
        ];

        self::views($layout, $data);
    }
}

