
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

@if(count($genero->livros))
@foreach($genero->livros as $livro)
{{$livro->titulo}}<br>
@endforeach
@else
    <div class="alert alert-danger" role="alert">
Neste género ainda não há livros!
</div> 
@endif
@endsection