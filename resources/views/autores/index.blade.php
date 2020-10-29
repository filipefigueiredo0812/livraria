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
<li>{{$autor->nome}}</li>
@endforeach
</ul>
{{$autores->render()}}
@endsection