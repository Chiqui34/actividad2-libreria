@extends('home')

@section('title', 'Alta Libro')


@section('content')
    <form action="{{ route('addLibro') }}" method="POST">
        @csrf

        <p class="cabecera">Alta libro</p>
        <label for="">Título: </label>
        <input type="text" name="titulo"><br/>
        <label for="">Autor: </label>
        <input type="text" name="autor"><br/>
        <label for="">Género: </label>
        <input type="text" name="genero"><br/>
        <label for="disponible">Disponible: </label>
        <input type="radio" name="disponible" id="" value="1">Sí &nbsp;
        <input type="radio" name="disponible" id="" value="0">No <br/>
        <label for="">Fecha Publicacion: </label>
        <input type="date" name="fechaPublicacion"><br/>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar libro</button>
    </form>
@endsection
