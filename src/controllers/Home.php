<?php

namespace Toadsuck\Skeleton\Controllers;

use Illuminate\Database\Capsule\Manager as Model;
use Toadsuck\Core\Database as DB;
use Toadsuck\Skeleton\Models\Captain;

class Home extends Base
{
	public function __construct()
	{
		parent::__construct();

		// Tell the template engine to look in views/home for our templates.
		$this->plates->addFolder('home', $this->resolvePath('views/home'));
		
		// Set our default template.
		$this->template->layout('layouts/default');
		
		// Set some variables for all views.
		$this->template->page_title = 'Toadsuck Skeleton';
		
		// Load our primary config file.
		$this->config->load('config');
		
		// And our database config file.
		$this->config->load('database');
		
		// Initialize our database.
		DB::init($this->config->get('dsn'));
	}
	
	public function index($name = null)
	{
		$this->template->name = !empty($name) ? $name : $this->config->get('default_name');
		
		$this->template->output('home::index', ['heading' => 'Congratulations, it worked!']); 
	}
	
	public function captains()
	{
		$captains = Captain::all()->toArray();
		$this->template->output('home::captains', ['captains' => $captains]);
	}
}
