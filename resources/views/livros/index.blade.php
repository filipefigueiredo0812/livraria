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

<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
<li>{{$livro->titulo}}
    
</li>
</a>
@endforeach
</ul>


{{$livros->render()}}
@endsection




