@extends('templates.default')
@section('title','Adicionar Produtos')
@section('content')
<div class="container  text-center mt-5 border">
    {{$success ?? ''}}
    @if(isset($data))
    <div class="container">
    <form name="form1" id="form" method="post" action="@php echo DIRPAGE.'MVC/produto_edit/'.$data->id; @endphp">
    <h2 class="text-center">Editar Produto</h2>  
    @else 
    <form name="form1" id="form" method="post" action="@php echo DIRPAGE.'MVC/produtos_create'; @endphp">
     <h2 class="text-center">Adicionar Produto</h2>   
    @endif
    
        <input class="m-2" name="name" id="name" placeholder="Nome:" type="text"  value="{{$data->name ?? '' }}" required> <br>
        <input class="m-2" name="price" id="price" placeholder="Preço:" type="text" value="{{$data->price ?? '' }}" required> <br>
        <input type="submit" value="Cadastrar"> <br>
    </form>
    </div>
  
@endsection

</div>