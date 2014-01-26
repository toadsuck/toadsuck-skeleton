<?php

namespace Toadsuck\Skeleton\Controllers;

class Base
{
	public function __construct()
	{
		
	}
	
	public function httpError($code = '404', $message = null)
	{
		switch($code) {
			case '404':
				header("HTTP/1.0 404 Not Found");
				print "404 Page Not Found";
				break;
			default:
				header("HTTP/1.0 " . $code);
				print $message;
				break;
		}
		
		exit;
	}
	
	public function __call($method = null, $args = null)
	{
		$this->httpError('404', 'Method does not exist');
	}
}
