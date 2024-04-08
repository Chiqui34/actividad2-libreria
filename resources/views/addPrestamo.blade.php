@extends('home')

@section('title', 'Alta Libro')


@section('content')
    <form action="{{ route('addPrestamoPost') }}" method="POST">
        @csrf

        <p class="cabecera">Nuevo Préstamo</p>
        <label for="">ID Libro: </label>
        <input type="text" name="idLibro"><br/>
        <label for="">Fecha Préstamo: </label>
        <input type="date" name="fechaDevolucion"><br/><br/>

        {{-- <label for="disponible">Devuelto: </label>
        <input type="radio" name="devuelto" id="" value="1">Sí<br/><br/> --}}

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar préstamo</button>
    </form>
@endsection
