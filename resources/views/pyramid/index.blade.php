@extends('layouts.app')

@section('title', 'Number Pyramid Generator')

@section('content')
<!-- =======================
     Contenedor principal de la página
     ======================= -->
<div class="min-h-screen bg-gray-100 py-10">
    
    <!-- Caja central que contiene el generador de pirámide -->
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-8">
        
        <!-- Título principal de la página -->
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">
            Interactive Pyramid Generator
        </h1>

        <!-- Componente Livewire que genera la pirámide dinámicamente -->
        @livewire('examples.pyramid')
    </div>
</div>
@endsection
