<?php

namespace Toadsuck\Skeleton\Controllers;

use Illuminate\Database\Capsule\Manager as Model;
use Toadsuck\Core\Controller;
use Toadsuck\Core\Database as DB;

class Home extends Controller
{
	public function __construct()
	{
		parent::__construct();

		// Set our default template.
		$this->template->layout('layouts/default');

		// Set some variables for all views.
		$this->template->page_title = 'Toadsuck Skeleton';
		
		// Load our primary config file.
		$this->config->load('config');
		
		// And our database config file.
		#$this->config->load('database');
		
		// Initialize our database.
		#DB::init($this->config->get('dsn'));
	}
	
	public function index()
	{
		$this->template->output('home/index', ['heading' => 'Congratulations, it worked!']);
	}
}
