<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroCRUDController;
use App\Http\Controllers\PrestamoCRUDController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [Controller::class, 'home'])->name('home');

Route::get('/addLibro', [LibroCRUDController::class, 'mostrarFormularioAdd'])->name('formularioAddLibro');
Route::post('/addLibroPost', [LibroCRUDController::class, 'addLibro'])->name('addLibro');

Route::get('/showLibros', [LibroCRUDController::class, 'mostrarLibros'])->name('showLibros');

Route::get('/detailLibro/{id}', [LibroCRUDController::class, 'mostrarDetalleLibro'])->name('detalleLibro');

Route::get('/editarLibro/{id}/edit', [LibroCRUDController::class, 'editLibro'])->name('modificaLibro');
Route::put('/editarLibro/{libro}', [LibroCRUDController::class, 'updateLibro'])->name('updateLibro');

Route::get('/addPrestamo', [PrestamoCRUDController::class, 'mostrarFormularioPrestamoAdd'])->name('formularioAddPrestamo');
Route::post('/addPrestamoPost', [PrestamoCRUDController::class, 'addPrestamo'])->name('addPrestamoPost');

Route::get('/showPrestamos', [PrestamoCRUDController::class, 'mostrarPrestamos'])->name('showPrestamos');

Route::get('/devolverPrestamo/{prestamo}/edit', [PrestamoCRUDController::class, 'formularioDevolucionPrestamo'])->name('formularioDevolverPrestamo');
Route::put('/devolverPrestamoPut/{libro}', [PrestamoCRUDController::class, 'updatePrestamo'])->name('updatePrestamo');

Route::get('/detailPrestamo/{id}', [PrestamoCRUDController::class, 'mostrarDetallePrestamo'])->name('detallePrestamo');
