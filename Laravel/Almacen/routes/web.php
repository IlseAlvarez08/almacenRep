<?php

use Illuminate\Support\Facades\Route;

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
