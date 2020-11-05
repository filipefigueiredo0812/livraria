@extends('layout')
@section('titulo')
Autores
@endsection
@section('header')
Autores
@endsection

@section('conteudo')
<ul> 
    
@foreach ($autores as $autor)
<a href="{{route('autores.show',['id'=>$autor->id_autor])}}">
<li>{{$autor->nome}}</li>
</a>
@endforeach
    
</ul>
{{$autores->render()}}
@endsection