<?php

/*
# You can define a PEAR-style DSN string when using mysql:
return [
	'dsn' => 'mysql://root:root@localhost/toadsuck',
];
*/

# SQLite - using array of keys.

/*
# Keys needed:

$defaults = [
	'driver'	=> 'mysql',
	'host'		=> 'localhost',
	'database'	=> 'mysql',
	'username'	=> 'root',
	'password'	=> null,
	'charset'	=> 'utf8',
	'collation'	=> 'utf8_unicode_ci',
	'prefix'	=> null
];
# Any keys not provided in the dsn parameter below will default to the value shown above.
*/		
return [
	'dsn' => [
		'driver' => 'sqlite',
		'database' => dirname(__DIR__) . '/storage/example.sqlite',
	],
];