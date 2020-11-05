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
    <a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">

<li>{{$editora->nome}}</li>
        </a>
@endforeach
</ul>
{{$editoras->render()}}
@endsection