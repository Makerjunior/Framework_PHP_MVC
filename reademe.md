# Detalhes do prgeto

1. No arquivo ```.htacces``` criada a varivél __$_GET['url']__ onde temos os valores digitados na url.

2. Criamos na pasta controllers o arquivo ```Routes.Controller``` que usa a variáverl  ```$_GET['url']``` , no metodo  perseUrl() e retorna um array com os dados digitados na URL, onde temos a opção de usar  parametros indicando o  indice desse array  que será retornado.
* Também temos o método getRoute() que é usado para criar as rotas, seu primeiro parametro é a url que será digita  e o segundo parametro é a controller que será chamada e o metodo divididas por @ 

* Exmplo: ControllerHome@index , onde a controller e ControllerHome e o metodo que será chamado é o index.

 3. No arquivo config.php temos as configurações de constantes para serem usadas no progeto.




4. Criamos a pasta views/templates onde temos o template padão para o progeto ```dafalt.blade.php```  
5.  Na pasta views ciramos a pagina home.blade.php que usa o template padrão.


