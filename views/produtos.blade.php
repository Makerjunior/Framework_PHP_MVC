@extends('templates.default')
@section('title','Produtos')
@section('content')
<h1 class="text-center m-5">Meus Produtos</h1>


<table>
 <tr>
        <td>Nome</td>
        <td>Preço</td>
        <td>Ação</td>
    </tr>
    @foreach($data as $produtos)
    <tr>
        <td>{{$produtos->name}}</td>
        <td>{{$produtos->price}}</td>
        <td> <a href="<?php echo DIRPAGE . 'MVC/produtos/' . $produtos->id ?>">Ler</a>
        <a href="@php echo DIRPAGE.'MVC/produto_edit/'.$produtos->id; @endphp">Editar</a> 
        <a href="@php echo DIRPAGE.'MVC/produto_delete/'.$produtos->id; @endphp">Deletar</a></td>
    </tr>
    @endforeach
</table>

@endsection