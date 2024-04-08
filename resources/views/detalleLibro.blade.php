@extends('home')

@section('title', 'Datos Libro: '.$libro->titulo)


@section('content')
    <p class="cabecera">Detalle libro:</p>
    <p><span style="font-weight: bold; margin-right:20px;">Título: </span>{{$libro->titulo}}</p>
    <p><span style="font-weight: bold; margin-right:20px;">Autor: </span>{{$libro->autor}}</p>
    <p><span style="font-weight: bold; margin-right:20px;">Género: </span>{{$libro->genero}}</p>
    <p><span style="font-weight: bold; margin-right:20px;">Fecha Publicación: </span>{{$libro->fecha_publicacion}}</p>
@endsection
