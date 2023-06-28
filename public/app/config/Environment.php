<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return ini_file
 * */
namespace app\config;

class Environment {

	public function config()
	{
		$dotenv = parse_ini_file('.env');

		define('GOOGLE_CA_KEY',$dotenv['GOOGLE_CA_KEY']);
		define('GTM_ID', $dotenv['GTM_ID']);
		define('GTM_KEY', $dotenv['GTM_KEY']);
		define('CONTENTFUL_TOKEN', $dotenv['CONTENTFUL_TOKEN']);
		define('CONTENTFUL_SPACE', $dotenv['CONTENTFUL_SPACE']);
	}
}