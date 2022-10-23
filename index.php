<?php
require_once('vendor/autoload.php');
require_once('config/config.php');
include('routes/web.php');


if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];


    $con = new Controllers\Controllerajax();
    echo ($con->seach($nome));
}