@extends('home')

@section('title', 'Editar Libro: '.$libro->titulo)


@section('content')

<form action="{{ route('updateLibro', $libro)}}" method="POST">
    @csrf

    @method('PUT')

    <p class="cabecera">Actualización de libro</p>
    <label for="">Id: </label>
    <input type="text" name="id" value="{{$libro->id}}"><br/>
    <label for="">Titulo: </label>
    <input type="text" name="titulo" value="{{$libro->titulo}}"><br/>
    <label for="">Autor: </label>
    <input type="text" name="autor" value="{{$libro->autor}}"><br/>
    <label for="">Género: </label>
    <input type="text" name="genero" value="{{$libro->genero}}"><br/>

    <label for="disponible">Disponible:  </label>
    @if ($libro->disponible === 1)
        <input type="radio" name="disponible" id="" value="1" checked>Sí
        <input type="radio" name="disponible" id="" value="0">No <br/>
    @else
        <input type="radio" name="disponible" id="" value="1">Sí
        <input type="radio" name="disponible" id="" value="0" checked>No <br/>
    @endif

    <label for="">Fecha Publicacion: </label>
    <input type="date" name="fechaPublicacion" value="{{$libro->fecha_publicacion}}"><br/>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar libro</button>
</form>
@endsection
