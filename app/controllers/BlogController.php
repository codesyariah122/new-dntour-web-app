<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param viws
**/

namespace app\controllers;

use app\models\WebApp;
use app\helpers\{Helpers};

class BlogController {

	private static function views($layout, $param)
	{
		$model = new WebApp;
		$helpers = new Helpers;
		$check_mobile = $helpers->isMobileDevice();
		$data = $model::getData();
		$meta = $model::getMetaTag($param['title']);
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

	public function index() 
	{
		echo "Blog Page On progress development";
	}

	public function detail($slug)
	{
		$layout = 'app/views/layout/AppLayout.php';
		$view = 'app/views/blog.php';

		$data = [
			'title' => "D & N tourtravel Blog | {$slug}",
			'page' => 'blog',
			'view' => $view
		];

		self::views($layout, $data);
	}

}