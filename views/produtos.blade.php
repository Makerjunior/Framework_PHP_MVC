@extends('templates.default')
@section('title','Produtos')
@section('content')
<h1 class="text-center mt-4">Meus Produtos</h1>
<div class=" text-center mt-4">
<input type="text" id="seach" placeholder="Username"  >
  <span class="btn btn-primary" >Seach</span>

</div>

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
                    <td></td>
                </tr>
        @endforeach
    </table>

@endsection    
 
    
