<?php
namespace Controllers;

use Jenssegers\Blade\Blade;

class ProdutosController{

    private $blade;

    public function __construct()
    {
        $this->blade=new Blade(  'views','cache');
    }

    #Página index
    public function show($url=null, $produto=null, $marca=null)
    {
        
        return $this->blade->render('produtos',compact('produto','marca'));
    }
}