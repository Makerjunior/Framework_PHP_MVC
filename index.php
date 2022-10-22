<?php
require_once('vendor/autoload.php');
require_once('config/config.php');
include('routes/web.php');

 use Controllers\ProdutosController;
 $con = new ProdutosController();

 var_dump($con->seach('ESP'));

