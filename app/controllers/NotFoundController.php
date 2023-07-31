<?php
// NotFoundController.php
namespace app\controllers;

use app\models\WebApp;

class NotFoundController {


    public function views($views, $param)
    {
        $model = new WebApp();
        $data = $model->getData();
        $meta = $model->getMetaTag($param['title']);
        $partials = $model->getPartials($param['page']);

        foreach($views as $view):
            require_once $view;
        endforeach;
    }

    public function run() {
        // Halaman not found
        header("HTTP/1.0 404 Not Found");

        $prepare_views = [
            'header' => 'app/views/layout/header.php',
            'home' => 'app/views/404.php',
            'footer' => 'app/views/layout/footer.php',
        ];

        $data = [
            'title' => "404 Not Found",
            'page' => '404'
        ];

        $this->views($prepare_views, $data);
    }
}
?>
