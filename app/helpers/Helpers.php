<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return USER_AGENT
**/

namespace app\helpers;

class Helpers {

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
}