<?php

namespace Toadsuck\Skeleton\Controllers;

class Base
{
	public $plates = null;
	public $template = null;
	public $base_path = null;
		
	public function __construct()
	{
		// We need to know paths to our resources.
		$this->base_path = dirname(__DIR__);
		
		// Set up our template engine.
		$this->plates = new \League\Plates\Engine($this->resolvePath('views'));

		// Load URI extension using global variable
		$this->plates->loadExtension(new \League\Plates\Extension\URI($_SERVER['PATH_INFO']));

		$this->assets_path = dirname($_SERVER['SCRIPT_FILENAME']) . '/';

		// Load the asset extension.
		$this->plates->loadExtension(new \League\Plates\Extension\Asset($this->assets_path, true));
		
		// Setup a template.
		$this->template = new \League\Plates\Template($this->plates);
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
	
	protected function resolvePath($resource)
	{
		return $this->base_path . '/' . $resource;
	}
	
	protected function view($view, $data = null)
	{
		return $this->template->render($view, $data);
	}
}
