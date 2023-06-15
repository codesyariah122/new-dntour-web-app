<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param viws
**/

namespace app\controllers;

use app\models\{Home};

class HomeController {

	public function views($views)
	{
		$model = new Home();
		$data = $model->getData();
		$meta = $model->getMetaTag();
		$partials = $model->getPartials();

		foreach($views as $view):
			require_once $view;
		endforeach;
	}

	public function index() 
	{
		$prepare_views = [
			'header' => 'app/views/layout/header.php',
			'home' => 'app/views/home.php',
			'footer' => 'app/views/layout/footer.php',
		];

		$this->views($prepare_views);
	}

}