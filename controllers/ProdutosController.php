<?php
namespace Controllers;

use Jenssegers\Blade\Blade;
use Models\ProdutoModel;
class ProdutosController extends ProdutoModel{

    private $blade;

    public function __construct()
    {
        $this->blade=new Blade(  'views','cache');
    }

    #Página index         parametros que podem ser pasados na url e acesados na view
    public function show($url=null, $produto=null, $marca=null)
    {
       
        $data =$this->showAll();
        return $this->blade->render('produtos',compact('data'));
    }

    
}