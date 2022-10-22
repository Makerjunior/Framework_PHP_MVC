<?php

namespace Models;

abstract class ConexaoModel
{
    protected function conectDB()
    {
        try{
            return $con=new \PDO("mysql:host=".DBHOST.";dbname=".DBNAME."",DBUSER,DBPASS);
        }catch (\PDOException $error){
            return $error->getMessage();
        }
    }
}