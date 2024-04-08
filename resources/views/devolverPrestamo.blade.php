@extends('home')

@section('title', 'Devolución Préstamo')


@section('content')
    <form action="{{ route('updatePrestamo', $prestamo)}}" method="POST">
        @csrf

        @method('PUT')

        <p class="cabecera">Devolver Préstamo</p>
        <label for="">ID Prestamo: </label>
        <input type="text" name="idLibro"><br/>
        <label for="">Fecha Devolución: </label>
        <input type="date" name="fechaPrestamo"><br/>

        <label for="disponible">Devuelto: </label>
        <input type="radio" name="devuelto" id="" value="1">Sí<br/><br/>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Devolver préstamo</button>
    </form>
@endsection
