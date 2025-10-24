<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PyramidController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se definen las rutas web de la aplicación. Cada ruta puede
| retornar una vista o invocar un método de un controlador.
|
*/

/**
 * Ruta principal de la aplicación.
 * 
 * Muestra la vista de bienvenida (welcome.blade.php).
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Ruta para el generador de pirámide.
 * 
 * Invoca el método 'index' del controlador PyramidController
 * y se le asigna el nombre de ruta 'pyramid.index' para
 * poder referenciarla fácilmente en enlaces y redirecciones.
 */
Route::get('/pyramid', [PyramidController::class, 'index'])->name('pyramid.index');
