<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administracion;
use App\Http\Controllers\Controladorlibro;
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

Route::get('/', [Administracion::class, 'index']) ;

Route::get('libros', [Controladorlibro::class, 'index'] )->name('listadoLibros');

