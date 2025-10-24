<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controlador PyramidController
 * 
 * Este controlador se encarga de manejar las vistas relacionadas
 * con la generación de pirámides numéricas.
 */
class PyramidController extends Controller
{
    /**
     * Muestra la vista principal de la pirámide.
     * 
     * @return \Illuminate\View\View Retorna la vista 'pyramid.index'.
     */
    public function index()
    {
        return view('pyramid.index');
    }
}
