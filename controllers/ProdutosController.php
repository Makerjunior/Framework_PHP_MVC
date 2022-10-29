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
       echo $name . $price;

        if($this->store($name,$price)){
             echo ('Dados inseridos com sucesso!');
           // return $this->blade->render('produtos_create',compact('success'));
        }
    }else{
        echo ("err");
       // return $this->blade->render('produtos_create');
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


public function showAjax()
{
    if (count($_POST) > 0) {
        $dados = $this->showAll();
        $cont = count($dados);
        $produto_edit = DIRPAGE.'MVC/produto_edit/';
        $produto_ler =DIRPAGE.'MVC/produtos/';
        $produto_delet = DIRPAGE.'MVC/produto_delete/';
         $res = "<h2 class='text-center m-3'>Tabela de Produtos</h2>";
         $res .= " <table>
         <tr>
           <th>Nome</th>
           <th>Preço</th>
           <th>Ação</th>
         </tr>";

for ($i = 0; $i < $cont; $i++) {
$res.='
         <tr>
           <td> '.$dados[$i]->name.' </td>
           <td>'.$dados[$i]->price.'</td>
           <td> 
           <a href='.$produto_ler.$dados[$i]->id.'> Read </a> 
           <a href='.$produto_edit.$dados[$i]->id.'> Edit </a>  
           <a href='.$produto_delet.$dados[$i]->id.'> Delete </a> 
           </td>
         </tr>';
}
       $res.="</table> ";
      

        echo $res;
    }
}




}