<?php

namespace App\Models;

use App\Models\Libro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';

    public function relacionPrestamoLibro(){
        return $this->belongsTo(Libro::class);
    }

    public function obtenerTodosPrestamos(){
        return Prestamo::all();
    }

    public function getPrestamoID($id){
        return Prestamo::find($id);
    }

    public function savePrestamo($libroId, $fechaPrestamo, $devuelto){
        $prestamo = new Prestamo;
        $prestamo->libro_id = $libroId;
        $prestamo->fecha_prestamo = $fechaPrestamo;
        $prestamo->devuelto = $devuelto;
        $prestamo->save();

        return $prestamo;
    }

    public function updatePrestamo($id, $libroId, $fechaPrestamo, $devuelto){
        $prestamo = Prestamo::getPrestamoID($id);
        if(isset($prestamo)){
            $prestamo->libro_id = $libroId;
            $prestamo->fecha_prestamo = $fechaPrestamo;
            $prestamo->devuelto = $devuelto;
            $prestamo->save();

            // return redirect()->route('detallePrestamo', $id);
        }
        return "No existe un préstamo con ese ID";
    }

    public function deletePrestamo($id){
        $prestamo = Prestamo::find($id);
        if(isset($prestamo)){
            $prestamo->delete();
            return "OK";
        }
        return "No existe un préstamo con ese ID";
    }
}
