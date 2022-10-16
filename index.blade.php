<?php
require_once('vendor/autoload.php');
use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

echo $blade->render('home', ['name' => 'John Doe']);