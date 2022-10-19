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
            // echo " Url passada ";
            // echo ("<pre>");
            // var_dump($url);
            // echo ("<pre>");

            return $url;
        }
    }

    #Chamar o controller e o método requisitado
    # Usado em para trabalhar com as rotas no arquivo web.php
    public function getRoute($request,$action)
    {
        $url=self::parseUrl(0);
        // echo " Url passada com parametro";
        // echo ("<pre>");
        // var_dump($url);
        // echo ("</pre>");

        if($url==$request){              // Se a url pasado for iqual a passada como parametro 
            $actionFinal=explode('@',$action); // Divide a action em 2 arrays usando o @ como divisor ex:[ControllerHome ] e [index]
            $controller="\\Controllers\\{$actionFinal[0]}"; // A pasta controller sendo concatenada com o resultado da primeira pocisao da action  ex:[ControllerHome]
            $method=$actionFinal[1];  // Como segundo parametro temos s outra parte da action  ex: [ index]
            $instance=new $controller; // Criando um objeto da classe retornada ex: [ControllerHome]
              
           // Chama da classe instance , o method , pasando os parametros retornados pelo metodo parceUrl
           echo call_user_func_array([$instance,$method],self::parseUrl());  
        }
    }
}
