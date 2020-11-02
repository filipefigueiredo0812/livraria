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
    
<a href="{{route('generos.show',['id'=>$genero->idg])}}"><li>{{$genero->designacao}}
</li>
</a>
@endforeach
</ul>

{{$generos->render()}}
@endsection