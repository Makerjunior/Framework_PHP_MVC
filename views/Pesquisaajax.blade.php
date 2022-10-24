@extends('templates.default')
@section('title','Pesquisa')
@section('content')

<div id="Container">


   <h2 class="text-center m-4">Pesquisar produtos:</h2>
   <div id="Pesquisar" class="text-center">
      <form action="controller.php" method="POST" name="form" id="form">
         <input type="text" name="nome" id="nome" placeholder="Digite o nome:">
         <input type="submit" value="Buscar">
      </form>

   </div>
   <hr />

   <h2 class="text-center">Resultados da pesquisa:</h2>
   <div id="Resultado"></div>



   @endsection