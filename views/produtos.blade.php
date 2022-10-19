@extends('templates.default')
@section('title','Produtos')
@section('content')
    <h1>Produtos</h1>
<p>Produto:{{$produto ?? "Não encontrado"}}</p>
<p>Marca:{{$marca ?? "Não encontrado"}}</p>

@endsection    
 
    
