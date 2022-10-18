<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\SalidasController;
/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');});


Route::get('/entradas', function () {
    $color="#fc9d65";
    return view('entradas')
    ->with('fondo',$color);
});

Route::get('/reporte', function () {
    $color="#bdfaa2";
    return view('reporte')
    ->with('fondo',$color);
    return view('reporte');});

    Route::get('/salidas', function () {
    $color="#bdfaa2";
    return view('salidas')
    ->with('fondo',$color);
    return view('salidas');});

    Route::get('/inventario', function () {
        $color="#bdfaa2";
        return view('inventario')
        ->with('fondo',$color);
        return view('inventario');});

    Route::get('/ver/{id}','ProfileController@index');
    Route::group(['prefix'=>'admin','as'=>'admin'],function(){
        Route::get('/',[AdminController::class, 'index']);
        Route::get('/admin/{id}',[AdminController::class,'show']);
        Route::get('/usuarios',[UsersController::class, 'index']);
        Route::get('/perfil',[ProfileController::class, 'index']);
        Route::get('/inventario',[InventarioController::class, 'index']);
        Route::get('/entradas',[EntradasController::class, 'index']);
        Route::get('/salidas',[SalidasController::class, 'index']);
        Route::post('/usuarios/edit',[SalidasController::class, 'editarUsuario']);
        Route::resource('/usuarios',UsersController::class);
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
