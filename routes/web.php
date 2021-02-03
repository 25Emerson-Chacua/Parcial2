<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administracion;
use App\Http\Controllers\Controladorlibro;
use App\Http\Controllers\Controladoreditoriales;
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
//libro
Route::get('libros', [Controladorlibro::class, 'index'] )->name('listadoLibros');

//editorial
Route::get('editorial', [Controladoreditoriales::class, 'index'] )->name('listadoEditoriales');

Route::get('editorial/registro', [Controladoreditoriales::class , 'formularioReg'])->name('form_registroEditoriales');

Route::post('editorial/registro', [Controladoreditoriales::class, 'registrar'])->name('registrarEditoriales');

Route::get('editorial/actualizar/{id}', [Controladoreditoriales::class, 'formularioAct'])->name('form_actualizaEditorial');

Route::post('editorial/actualizar/{id}', [Controladoreditoriales::class, 'actualizar'])->name('actualizarEditorial');

