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

Route::get('/', function () {
    return view('inicio');
});

Route::get('nuestra-empresa/', function () {
    return view('nuestraEmpresa');
});

Route::get('contacto/', function () {
    return view('contacto');
});

Route::get('servicios/', function () {
    return view('servicios');
});

Route::get('pago/', function () {
    return view('pago');
});

Route::post('solicitarcotizacion/','ServiciosController@SendMail')->name('MailSender');