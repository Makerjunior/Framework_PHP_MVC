<?php
require_once('vendor/autoload.php');
require_once('config/config.php');
include('routes/web.php');

 #Estudos 

 class Carro{
   protected $Marca;
   protected $Preco;
    public function __construct()
    {
         
            echo "Carro "; 
   
    }

    public function preco($Marca)
    {
        switch ($this->Marca) {
            case $Marca:
               $this->Preco = 100000;
                break;
            case $Marca:
                $this->Preco = 2000;
                break;
        }

        return "Valor do Veiculo :".$this->Preco;
   }

   public function cores(){
    return ['BMW','amarelo','verde'];
   }

 }

 $carro = new Carro();


 call_user_func_array([$carro,'preco'],self::cores());
