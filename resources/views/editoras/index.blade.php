@extends('layout')
@section('titulo')
Editoras
@endsection
@section('header')
Editoras
@endsection
@section('conteudo')
<ul>
@foreach ($editoras as $editora)
<li>{{$editora->nome}}</li>
@endforeach
</ul>
{{$editoras->render()}}
@endsection