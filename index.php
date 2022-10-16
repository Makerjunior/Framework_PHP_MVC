<?php
require_once('vendor/autoload.php');
require_once('config/config.php');

// use Jenssegers\Blade\Blade;

// $blade = new Blade('views', 'cache');

// echo $blade->render('home', ['name' => 'John Doe']);

$controller=new \Controllers\HomeController();
echo $controller->index();