@extends('layout')
@section('titulo')
Livros
@endsection
@section('header')
Livros
@endsection
@section('conteudo')
<ul>
@foreach ($livros as $livro)
<li>{{$livro->titulo}}</li>
@endforeach
</ul>
{{$livros->render()}}
@endsection