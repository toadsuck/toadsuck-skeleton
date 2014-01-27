<?php

namespace Toadsuck\Skeleton\Controllers;

use Toadsuck\Core\Template;
use Toadsuck\Core\Config;

class Base
{
	public $plates = null;
	public $template = null;
	public $base_path = null;
	public $config = null;
		
	public function __construct()
	{
		// We need to know paths to our resources.
		$this->base_path = dirname(__DIR__);

		// Set up the template engine.
		$this->template = new Template($this->resolvePath('views'));

		// Set up configs.
		$this->config = new Config($this->getEnvironment(), $this->resolvePath('config'));
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
		return rtrim($this->base_path . DIRECTORY_SEPARATOR . $resource, DIRECTORY_SEPARATOR);
	}
	
	protected function getEnvironment()
	{
		$environment_file = $this->resolvePath('config/environment');
		
		if (file_exists($environment_file)) {
			$environment = trim(file_get_contents($environment_file));
		} else {
			$environment = 'local';
		}
		
		return $environment;
	}
}
