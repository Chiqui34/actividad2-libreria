@extends('home')

@section('title', 'Datos Prestamo: '.$prestamo->id)


@section('content')
    <p class="cabecera">Detalle libro:</p>
    <p><span style="font-weight: bold; margin-right:20px;">ID Préstamo: </span>{{$prestamo->id}}</p>
    <p><span style="font-weight: bold; margin-right:20px;">Fecha Prestamo: </span>{{$prestamo->fecha_prestamo}}</p>
    <p><span style="font-weight: bold; margin-right:20px;">Devuelto: </span>
        @if ($prestamo->devuelto == 1)
            Sí
        @else
            No
        @endif
    </p>
    <p><span style="font-weight: bold; margin-right:20px;">ID Libro: </span>{{$prestamo->libro_id}}</p>
@endsection
