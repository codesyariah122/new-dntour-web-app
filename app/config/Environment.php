<?php
namespace app\config;

use Dotenv\Dotenv;

class Environment {

	public function config()
	{
		$dotenv = parse_ini_file('.env');

		define('GOOGLE_CA_KEY',$dotenv['GOOGLE_CA_KEY']);
		define('GTM_ID', $dotenv['GTM_ID']);
		define('GTM_KEY', $dotenv['GTM_KEY']);
	}
}