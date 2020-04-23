<?php
use Illuminate\Support\Facades\Route;




Route::view('/', 'cliente.index')->name('inicio');
Route::post('/', 'ClienteController@insert')->name('registarCliente');
