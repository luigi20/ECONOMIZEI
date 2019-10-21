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

Route::prefix('/')->group(function(){
   
    Route::get('/indexTipoReceita', function () {
        return view('TipoReceita.addTipoReceita')->with('cabecalho','Tipo de Receita');
    })->name('indexTipoReceita');

    Route::get('/addTipoReceita', function () {
        return view('TipoReceita.addTipoReceita')->with('cabecalho','Tipo de Receita');
    })->name('addTipoReceita');

});

Route::prefix('/')->group(function(){
   
    Route::get('/indexTipoPagamento', function () {
        return view('TipoPagamento.addTipoPagamento')->with('cabecalho','Tipo de Pagamento');
    })->name('indexTipoReceita');

    Route::get('/addTipoPagamento', function () {
        return view('TipoPagamento.addTipoPagamento')->with('cabecalho','Tipo de Pagamento');
    })->name('addTipoPagamento');

});

Route::prefix('/')->group(function(){
   
    Route::get('/indexReceita', function () {
        return view('Receita.addReceita')->with('cabecalho','Receita');
    })->name('indexReceita');

    Route::get('/addReceita', function () {
        return view('Receita.addReceita')->with('cabecalho','Receita');
    })->name('addReceita');

});

Route::prefix('/')->group(function(){
   
    Route::get('/indexDespesa', function () {
        return view('Despesa.addDespesa')->with('cabecalho','Despesa');
    })->name('indexDespesa');

    Route::get('/addDespesa', function () {
        return view('Despesa.addDespesa')->with('cabecalho','Despesa');
    })->name('addDespesa');

});
