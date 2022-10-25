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


    public function find($id){
       $query=$this->conectDB()->prepare( "select * from produtos where id=?");
       $query->bindValue(1,$id,\PDO::PARAM_INT); 
       $query->execute();
       return $data=$query->fetchAll(\PDO::FETCH_OBJ);

    }
    public function store($name,$price)
    {
        $id=0;
        $query=$this->conectDB()->prepare("insert into produtos values(?,?,?)");
        $query->bindParam(1,$id,\PDO::PARAM_INT);
        $query->bindParam(2,$name,\PDO::PARAM_STR);
        $query->bindParam(3,$price,\PDO::PARAM_STR);
        return $query->execute();
    }

    public function update($id,$name,$price)
{
    $query=$this->conectDB()->prepare("update produtos set name=?,price=? where id=?");
    $query->bindParam(1,$name,\PDO::PARAM_STR);
    $query->bindParam(2,$price,\PDO::PARAM_STR);
    $query->bindParam(3,$id,\PDO::PARAM_INT);
    return $query->execute();
}

#Deletar no banco
public function destroy($id)
{
    $query=$this->conectDB()->prepare("delete from produtos where id=?");
    $query->bindParam(1,$id,\PDO::PARAM_INT);
    return $query->execute();
}
}