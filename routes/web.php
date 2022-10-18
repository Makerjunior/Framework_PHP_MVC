<?php
$routes=new \Controllers\RoutesController();
/***
 * O primeiro parametro é a url que devea ser pasada e o segundo o controller e metodo da controller sepadados por @
 */
$routes->getRoute('carros','HomeController@index');
$routes->getRoute('casa','HomeController@casa');