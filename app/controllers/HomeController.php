<?php

/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param viws
 **/

namespace app\controllers;

use app\models\WebApp;
use app\helpers\{Helpers};

class HomeController
{

	public $helpers, $env;

	private static function views($layout, $param)
	{
		$model = new WebApp;
		$helpers = new Helpers;
		$check_mobile = $helpers->isMobileDevice();
		$data = $model::getData();
		$meta = $model::getMetaTag($param['title']);
		$contents = $model::getPartials($param['page']);
		$partials = $model::getPartials($param['page']);
		$rentals = $data['rentals']['data'];
		$travels = $data['travels']['data'];
		$tours = $data['tours']['data'];
		$categories = $data['categories']['data'];
		$sliders = $data['sliders']['data'];
		$file_images = $data['file_images']['data'];

		extract([$contents, $partials]);

		ob_start();
		require_once $param['view'];
		$content = ob_get_clean();
		ob_start();
		require_once $layout;
		$output = ob_get_clean();

		echo $output;
	}

	public function index()
	{
		$layout = 'app/views/layout/AppLayout.php';
		$view = 'app/views/home.php';

		$data = [
			'title' => 'D & N tourtravel - Sewa Mobil Bandung | Sewa Hiace Bandung',
			'page' => 'home',
			'view' => $view
		];
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'on') {
			header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
			exit();
		}
		self::views($layout, $data);
	}
}
