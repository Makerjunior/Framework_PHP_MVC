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
    public function index($url=null, $id=null)
    {
       if ($id == null){
        $data =$this->showAll();
       }else{
        
        $data=$this->find($id);

       }
       
        return $this->blade->render('produtos',compact('data'));
    }

    public function create()
{
    if(count($_POST)>0){
      
        $name=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
        $price=filter_input(INPUT_POST,'price',FILTER_DEFAULT);
        if($this->store($name,$price)){
            $success='Dados inseridos com sucesso!';
            return $this->blade->render('produtos_create',compact('success'));
        }
    }else{
       
        return $this->blade->render('produtos_create');
    }
}

public function edit($url=null,$id=null)
{
    if(count($_POST)>0){
        $name=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
        $price=filter_input(INPUT_POST,'price',FILTER_DEFAULT);
        if($this->update($id,$name,$price)){
            $success='Dados atualizados com sucesso!';
            return $this->blade->render('produtos_create',compact('success'));
        }
    }else{
        $data=$this->find($id)[0];

        return $this->blade->render('produtos_create',compact('data'));
    }
}

#Página de deletar
public function delete($url=null,$id=null)
{
   if($this->destroy($id))
   {
       echo "<script>alert('Dado deletado com sucesso!');</script>";
       header("location: ".DIRPAGE."MVC/produtos");
   }
}
}