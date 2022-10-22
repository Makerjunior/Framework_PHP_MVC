@extends('templates.default')
@section('title','Produtos')
@section('content')
<h1>Meus Produtos</h1>
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
 
    
