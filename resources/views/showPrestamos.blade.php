@extends('home')

@section('title', 'Listado Prestamos')


@section('content')
    @if (count($prestamos) > 0)
        <p><span style="font-weight:bold">Listado Prestamos:</p>
        @foreach ($prestamos as $prestamo)
            <p style="margin: 18px">{{$prestamo->id}}
                <a href="{{route('detallePrestamo', $prestamo->id)}}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.5 px-4 rounded-full mx-4">Ver detalle Prestamo</button>
                </a>
                <a href="{{route('formularioDevolverPrestamo', $prestamo->id)}}">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-0.5 px-4 rounded-full">Devolver Prestamo</button>
                </a>
            </p>
        @endforeach
    @endif
@endsection
