@extends('layout')
@section('titulo')
Autores
@endsection
@section('header')
Autores
@endsection
@section('conteudo')
ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}<br>

@if(count($autor->livros))
@foreach($autor->livros as $livro)
{{$livro->titulo}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Não tem livros
</div>
@endif
Data de Nascimento:{{$autor->data_nascimento}}<br>
Fotografia:{{$autor->fotografia}}<br>
@endsection