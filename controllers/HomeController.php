<?php
namespace Controllers;

use Jenssegers\Blade\Blade;

class HomeController{

    private $blade;

    public function __construct()
    {
        $this->blade=new Blade(  'views','cache');
    }

    #Página index
    public function index()
    {
        $name='Thiago';
        return $this->blade->render('home',compact('name'));
    }
}