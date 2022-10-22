<?php
namespace Models;

class ProdutoModel extends ConexaoModel
{
    public function showAll()
    {
        $query=$this->conectDB()->prepare("select * from produtos");
        $query->execute();
        return $data=$query->fetchAll(\PDO::FETCH_OBJ);
    }


  public  function seach($name){
    $query=$this->conectDB()->prepare("select * from produtos where name like '%".$name."%'");
       $query->execute();
        return $seach=$query->fetchAll(\PDO::FETCH_OBJ);
  }


}