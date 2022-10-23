<?php
namespace Controllers;

use Jenssegers\Blade\Blade;
use Models\ProdutoModel;

class Controllerajax extends ProdutoModel{

    private $blade;

    public function __construct()
    {
        $this->blade=new Blade(  'views','cache');
    }

    #Página index
    public function index()
    {
        $name='Thiago';
        return $this->blade->render('Pesquisaajax',compact('name'));
    }

    
  public  function seach($name){
    
    $query=$this->conectDB()->prepare("select * from produtos where name like '%".$name."%'");
       $query->execute();
       $seach=$query->fetchAll(\PDO::FETCH_OBJ);

       return $seach[0]->name;
  }
}