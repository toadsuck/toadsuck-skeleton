<?php

namespace Toadsuck\Skeleton\Controllers;

class Home extends Base
{
	public function __construct()
	{
		
	}
	
	public function index($id = null)
	{
		printf('In %s method with id = %s', __METHOD__, var_dump($id));
	}
	
	public function foo($id = null)
	{
		printf('In %s method with id = %s', __METHOD__, $id);
	}
}