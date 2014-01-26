<?php

namespace Toadsuck\Skeleton\Controllers;

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
	}
	
	public function index($id = null)
	{
		$this->template->output('home::index', ['heading' => 'Hello, world!!!!']);
	}
	
	public function foo($id = null)
	{
		printf('In %s method with id = %s', __METHOD__, $id);
	}
}
