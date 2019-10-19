<?php

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

Route::get('/dashboard', function () {
    return view('Home.Home')->with('cabecalho','Dashboard');
})->name('dashboard');

Route::prefix('/')->group(function(){
   
    Route::get('/indexTipoDespesa', function () {
        return view('TipoDespesa.addTipoDespesa')->with('cabecalho','Tipo de Despesa');
    })->name('indexTipoDespesa');

    Route::get('/addTipoDespesa', function () {
        return view('TipoDespesa.addTipoDespesa')->with('cabecalho','Tipo de Despesa');
    })->name('addTipoDespesa');

    
});

