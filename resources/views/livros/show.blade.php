@extends('layout')
@section('titulo')
Livros
@endsection
@section('header')
Livros
@endsection
@section('conteudo')
ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Total de Páginas:{{$livro->total_paginas}}<br>

@if(isset($livro->genero->designacao))
Género:{{$livro->genero->designacao}}<br>
@else
<div class="alert alert-danger" role="alert">
<b>Sem género definido</b>
</div>
@endif

@if(isset($livro->autor->nome))
Autor:{{$livro->autor->nome}}<br>
@else
<div class="alert alert-danger" role="alert">
<b>Sem autor</b>
</div>
@endif

Data de Edição:{{$livro->data_edicao}}<br>
ISBN:{{$livro->isbn}}<br>
Observações:{{$livro->observacoes}}<br>
Imagem de Capa:{{$livro->imagem_capa}}<br>
ID Genero:{{$livro->id_genero}}<br>
ID Autor:{{$livro->id_autor}}<br>
Sinopse:{{$livro->sinopse}}<br>
@endsection