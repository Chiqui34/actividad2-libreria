<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';

    public function relacionLibroPrestamo(){
        return $this->hasMany(Prestamo::class);
    }

    public function obtenerTodos(){
        return Libro::all();
    }

    public function getLibroID($id){
        return Libro::find($id);
    }

    public function getLibroTitulo($titulo){
        return Libro::where('titulo', '=', $titulo);
    }

    public function saveLibro($titulo, $autor, $genero, $disponible, $fechaPublicacion){
        $libro = new Libro;
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->genero = $genero;
        $libro->disponible = $disponible;
        $libro->fecha_publicacion = $fechaPublicacion;
        $libro->save();

        return $libro;
    }

    public function updateLibro($id, $titulo, $autor, $genero, $disponible,$fechaPublicacion){
        $libro = Libro::getLibroID($id);
        if(isset($libro)){
            $libro->titulo = $titulo;
            $libro->autor = $autor;
            $libro->genero = $genero;
            $libro->disponible = $disponible;
            $libro->fecha_publicacion = $fechaPublicacion;
            $libro->save();

            return redirect()->route('detalleLibro', $id);
        }
        return "No existe un libro con ese ID";
    }

    public function deleteLibro($id){
        $libro = Libro::find($id);
        if(isset($libro)){
            $libro->delete();
            return "OK";
        }
        return "No existe un libro con ese ID";
    }


}
