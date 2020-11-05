
@extends('layout')
@section('titulo')
Generos
@endsection
@section('header')
Generos
@endsection
@section('conteudo')
ID:{{$genero->id_genero}}<br>
Designação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}<br>
@endsection