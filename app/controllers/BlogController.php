<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param viws
**/

namespace app\controllers;

use app\models\WebApp;

class BlogController {

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

	public function index() 
	{
		echo "Blog Page On progress development";
	}

	public function detail($slug)
	{
		$prepare_views = [
			'header' => 'app/views/layout/header.php',
			'home' => 'app/views/blog.php',
			'footer' => 'app/views/layout/footer.php',
		];

		$data = [
			'title' => "DN tourtravel Blog | {$slug}",
			'page' => 'blog'
		];

		$this->views($prepare_views, $data);
	}

}