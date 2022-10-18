<?php
namespace Controllers;

class RoutesController
{
    #Cria um array com a url digitada pelo usuário 
    /***
     * Podera ser pasado parametro para servir como indice do array da url 
     * assim podemos escolher qual indice queremos do array de URL
     */
    public static function parseUrl($par=null)
    {
        $url=explode('/',$_GET['url'],FILTER_SANITIZE_URL); # Trasforma a url passada em array
        if(!is_null($par)){
            if(array_key_exists($par,$url)){ #Verifica se existe indece pasado como parametro no array de url
                return $url[$par];
            }else{
                return false;
            }
        }else{
            return $url;
        }
    }

    #Chamar o controller e o método requisitado
    public function getRoute($request,$action)
    {
        $url=self::parseUrl(0);
        if($url==$request){
            $actionFinal=explode('@',$action);
            $controller="\\Controllers\\{$actionFinal[0]}";
            $method=$actionFinal[1];
            $instance=new $controller;
            echo call_user_func_array([$instance,$method],self::parseUrl());
        }
    }
}