<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MeseroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventoFotoController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

use App\Models\EventoFoto;
use App\Models\Archivo;
use App\Models\Categoria;
use App\Models\Paquete;
use App\Models\Evento;
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
    $eventofotos = EventoFoto::all();  
    $categorias = Categoria::where('categoria_de', 'Eventos')->get();
    return view('dashboard-user', compact('eventofotos', 'categorias'));
});


Route::get('/admin/inventario', function () {
    $categorias = Categoria::all();                 
    return view('/admin/inventario', compact('categorias'));
})->name('inventario')->middleware('auth');

Route::get('/admin/evento/categorias', function () {
    $categorias = Categoria::all();  
    $user = Auth::user();   
    $evento = Evento::where('user_id', '=', $user->id)->first();
    return view('/admin/evento/list-categorias', compact('categorias', 'evento'));
})->name('evento.categoria')->middleware('auth');

//*** ADMIN ****
Route::resource('admin/user', UserController::class)->middleware('auth');
Route::resource('admin/producto', ProductoController::class)->middleware('auth');
Route::resource('admin/mesero', MeseroController::class)->middleware('auth');
Route::resource('admin/categoria', CategoriaController::class)->parameters(['categoria' => 'categoria'])->middleware('auth');
Route::resource('admin/paquete', PaqueteController::class)->middleware('auth');
Route::resource('admin/archivo', ArchivoController::class)->middleware('auth');
Route::resource('admin/evento', EventoController::class)->middleware('auth');
Route::resource('admin/eventofoto', EventoFotoController::class)->middleware('auth');

Route::get('admin/archivo/descarga/{archivo}', [ArchivoController::class, 'descargar'])->name('archivo.descargar')->middleware('auth');

Route::get('admin/paquete/add-producto/{paquete}', [PaqueteController::class, 'show_producto'])->name('paquete.producto.show')->middleware('auth');
Route::post('admin/paquete/add-producto/{paquete}', [PaqueteController::class, 'add_producto'])->name('paquete.producto.add')->middleware('auth');
Route::delete('admin/paquete/add-producto/{producto}/{paquete}', [PaqueteController::class, 'destroy_producto'])->name('paquete.producto.destroy')->middleware('auth');

Route::post('admin/evento/add-paquete/{evento}', [EventoController::class, 'add_paquete'])->name('evento.paquete.add')->middleware('auth');
Route::delete('admin/evento/add-paquete/{paquete}/{evento}', [EventoController::class, 'destroy_paquete'])->name('evento.paquete.destroy')->middleware('auth');

Route::post('admin/eventofoto/add-archivo/{eventofoto}', [EventoFotoController::class, 'add_archivo'])->name('eventofoto.archivo.add')->middleware('auth');
Route::delete('admin/eventofoto/add-producto/{archivo}/{eventofoto}', [EventoFotoController::class, 'destroy_archivo'])->name('eventofoto.archivo.destroy')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        $archivos = Archivo::all();
        $paquetes = Paquete::all();  
        
        $client = new Client();                     
        $res = $client->request('GET', 'https://api.thecatapi.com/v1/images/search?limit=10'
        );                 
        $data = json_decode($res->getBody(), true); // Decodifica el JSON en un arreglo asociativo

        //$url = $data[0]['url'];

        return view('admin.dashboard', compact('archivos', 'paquetes', 'data'));
    })->name('dashboard');
});


Route::get('/{eventofoto}', function (EventoFoto $eventofoto) {    
    return view('user/evento-detalle', compact('eventofoto'))->layout('layouts.guest');
})->name('evento.detalle');

