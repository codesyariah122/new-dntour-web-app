<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return USER_AGENT
**/

namespace app\helpers;

use app\datasources\{PackagesData};

class Helpers {

	private $dataSources;

	public function __construct()
	{
		$this->dataSources = new PackagesData;
	}

	public function isMobileDevice() {
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
	    $mobileKeywords = ['Mobile', 'Android', 'iPhone', 'iPad', 'Windows Phone']; 

	    foreach ($mobileKeywords as $keyword) {
	    	if (stripos($userAgent, $keyword) !== false) {
	    		return true;
	    	}
	    }

	    return false;
	}

	public function getCategoryName($lists, $categoryId)
	{
		$categories = $this->dataSources->categories();
		// var_dump($categories); die;

    // Filter array rentals berdasarkan category_id
		$filteredLists = array_filter($lists, function($list) use ($categoryId) {
			return $list['category_id'] == $categoryId;
		});

    // Ambil category_id dari hasil filter pertama
		$firstLists = reset($filteredLists);
		$categoryId = $firstLists['category_id'];

    // Ambil nama kategori berdasarkan category_id dari array categories
		$filteredCategories = array_filter($categories, function($category) use ($categoryId) {
			return $category['id'] == $categoryId;
		});

    // Ambil nama kategori dari hasil filter pertama
		$firstCategory = reset($filteredCategories);

		return $firstCategory['name'];
	}

	public function format_wa_send($data)
	{
		$text = "Hello, D&N Tour. Saya ingin " . ($data['category'] === 'Sewa Mobil' ? $data['category'] : 'memesan') . " " . ($data['category'] !== 'Sewa Mobil' ? 'paket' : '') . " dari D&N Tour, berikut rincian pesanan saya:\n"
		. "Category: " . urlencode($data['category']) . "\n"
		. "Mobil: " . urlencode($data['title']) . "\n"
		. "Price: " . urlencode($data['price']);

		return str_replace(' ', '+', urlencode($text));
	}
}