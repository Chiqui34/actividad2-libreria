<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoCRUDController extends Controller
{
    protected $prestamo;
    public function __construct(Prestamo $prestamo){
        $this->prestamo = $prestamo;
    }

    public function mostrarPrestamos(){
        $allPrestamos = $this->prestamo->obtenerTodosPrestamos();
        return view('showPrestamos', ['prestamos' => $allPrestamos]);
    }

    public function mostrarFormularioPrestamoAdd(){
        return view('addPrestamo');
    }

    public function addPrestamo(Request $request){
        $libro = new Libro;

        // dd($libro->getLibroID($request->input('idLibro')));
        if( $libro->getLibroID($request->input('idLibro'))->disponible == 1 ) {
            $libroPrestamo = $libro->getLibroID($request->input('idLibro'));

            $libroPrestamo->updateLibro($request->input('idLibro'),
                                $libroPrestamo->titulo,
                                $libroPrestamo->autor,
                                $libroPrestamo->genero,
                                0,
                                $libroPrestamo->fecha_publicacion);
            return $this->prestamo->savePrestamo($request->input('idLibro'),
                                            $request->input('fechaPrestamo'), 0);
        } else {
            return "El libro no está disponible.";
        }
    }

    public function updatePrestamo(Request $request){
        return $this->prestamo->updatePrestamo($request->input('id'),
                        $request->input('idPrestamo'),
                        $request->input('fechaDevolucion'),
                        $request->input('devuelto'));
    }


    public function formularioDevolucionPrestamo($id){
        $modifPrestamo = $this->prestamo->getPrestamoID($id);
        return view('devolverPrestamo', ['prestamo' => $modifPrestamo]);
    }

    public function mostrarDetallePrestamo($id){
        $detallePrestamo = $this->prestamo->getPrestamoID($id);
        return view('detallePrestamo', ['prestamo' => $detallePrestamo]);
    }
}
