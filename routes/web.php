<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

/*Route::get('/', function () {
    return view('welcome');
});¨*/

Route::get('/', function () {
    return view('dashboard-user');
});

//*** ADMIN ****
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/lista-productos',  [ProductoController::class,'index']);
Route::get('/admin/add-producto',  [ProductoController::class,'create']);
Route::get('/admin/producto/{producto}/edit',  [ProductoController::class,'edit'])->name('admin.producto.editar');


//end ADMIN

Route::get('/login', function () {
    return view('login');
});

//Route::get('producto', [ProductoController::class, 'index']);
Route::resource('producto', ProductoController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
