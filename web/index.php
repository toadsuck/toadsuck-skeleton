<?php

namespace Toadsuck\Skeleton;

$app_dir = dirname(__DIR__);

// Use Composer's autoloader.
require_once $app_dir . '/vendor/autoload.php';

// Pass a couple options to our dispatcher.
$opts = ['app_dir' => $app_dir, 'namespace' => __NAMESPACE__];

$app = new \Toadsuck\Core\Dispatcher($opts);

// Dispatch the request.
$app->dispatch();
