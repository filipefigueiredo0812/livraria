@extends('layout')
@section('titulo')
Generos
@endsection
@section('header')
Generos
@endsection
@section('conteudo')
<ul>
@foreach ($generos as $genero)
<li>{{$genero->designacao}}</li>
@endforeach
</ul>
{{$generos->render()}}
@endsection