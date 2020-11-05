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
Data de Nascimento:{{$autor->data_nascimento}}<br>
Fotografia:{{$autor->fotografia}}<br>
@endsection