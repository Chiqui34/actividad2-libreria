@extends('home')

@section('title', 'Listado Libros')


@section('content')
    @if (count($libros) > 0)
        <p><span style="font-weight:bold">Listado libros:</p>
        @foreach ($libros as $libro)
            {{-- <a href="{{route('detalleLibro', $libro->id)}}"><p>{{$libro->titulo}}</p></a> --}}
            <p style="margin: 18px">{{$libro->titulo}}
                <a href="{{route('detalleLibro', $libro->id)}}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.5 px-4 rounded-full mx-4">Ver detalle</button>
                </a>
                <a href="{{route('modificaLibro', $libro->id)}}">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-0.5 px-4 rounded-full">Editar Libro</button>
                </a>
            </p>
        @endforeach
    @endif
@endsection
