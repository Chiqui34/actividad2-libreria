<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroCRUDController extends Controller
{

    protected $libro;
    public function __construct(Libro $libro){
        $this->libro = $libro;
    }

    public function mostrarFormularioAdd(){
        return view('addLibro');
    }

    public function mostrarLibros(){
        $allLibros = $this->libro->obtenerTodos();
        return view('showLibros', ['libros' => $allLibros]);
    }

    public function mostrarDetalleLibro($id){
        $detalleLibro = $this->libro->getLibroID($id);
        return view('detalleLibro', ['libro' => $detalleLibro]);
    }

    public function addLibro(Request $request){
        return $this->libro->saveLibro($request->input('titulo'),
                                        $request->input('autor'),
                                        $request->input('genero'),
                                        $request->input('disponible'),
                                        $request->input('fechaPublicacion'));
    }

    public function editLibro($id){
        $modifLibro = $this->libro->getLibroID($id);
        return view('editLibro', ['libro' => $modifLibro]);
    }

    public function updateLibro(Request $request){
        return $this->libro->updateLibro($request->input('id'),
                        $request->input('titulo'),
                        $request->input('autor'),
                        $request->input('genero'),
                        $request->input('disponible'),
                        $request->input('fechaPublicacion'));
    }

    public function showLibros(){
        $allLibros = $this->libro->obtenerTodos();
        return view('mostrarLibros', ['libros' => $allLibros]);
    }

    public function getLibroControllerID(Request $request){
        return $this->libro->getLibroID($request('id'));
    }

    public function getLibroControllerTitulo(Request $request){
        return $this->libro->getLibroTitulo($request('titulo'));
    }

    public function deleteLibroController(Request $request){
        return $this->libro->deleteLibro($request('id'));
    }
}

