<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param viws
**/

namespace app\controllers;

use app\models\WebApp;
use app\helpers\{Helpers};

class HomeController {

	public $helpers, $env;

	public function __construct()
	{
		$this->helpers = new Helpers;		
	}

	public function views($views, $param)
	{
		$model = new WebApp;
		$data = $model->getData();
		$meta = $model->getMetaTag($param['title']);
		$partials = $model->getPartials($param['page']);

		$rentals = $data['rentals']['data'];
		$travels = $data['travels']['data'];
		$tours = $data['tours']['data'];
		$categories = $data['categories']['data'];
		$sliders = $data['sliders']['data'];
		$helpers = $this->helpers;

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

		$data = [
			'title' => 'DN tourtravel - Sewa Mobil Bandung | Sewa Hiace Bandung',
			'page' => 'home'
		];
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'on') {
			header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
			exit();
		}
		$this->views($prepare_views, $data);
	}

}