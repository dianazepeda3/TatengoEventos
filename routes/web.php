<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MeseroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PaqueteController;

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
    return view('dashboard-user');
});

//*** ADMIN ****
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/inventario', [CategoriaController::class, 'mostrarCarrusel'])->name('admin.inventario')->middleware('auth');

Route::resource('admin/producto', ProductoController::class)->middleware('auth');
Route::resource('admin/mesero', MeseroController::class)->middleware('auth');
Route::resource('admin/categoria', CategoriaController::class)->parameters(['categoria' => 'categoria'])->middleware('auth');
Route::resource('admin/paquete', PaqueteController::class)->middleware('auth');

Route::get('admin/paquete/add-producto/{paquete}', [PaqueteController::class, 'show_producto'])->name('admin.paquete.producto.show')->middleware('auth');
Route::post('admin/paquete/add-producto/{paquete}', [PaqueteController::class, 'add_producto'])->name('admin.paquete.producto.add')->middleware('auth');
Route::delete('admin/paquete/add-producto/{producto}/{paquete}', [PaqueteController::class, 'destroy_producto'])->name('admin.paquete.producto.destroy')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
