<?php
$routes=new \Controllers\RoutesController();
/***
 * O primeiro parametro é a url que deve ser pasada e o segundo e o controller e metodo da controller sepadados por @
 * a função getRoutes() está na pasta controllers arquivo ControlllersRoute
 */
$routes->getRoute('carros','HomeController@index');
$routes->getRoute('casa','HomeController@casa');