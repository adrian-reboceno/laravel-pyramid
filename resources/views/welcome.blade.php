@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<!-- =======================
     Contenedor principal centrado
     ======================= -->
<div class="text-center">
    
    <!-- Título principal de bienvenida -->
    <h1 class="text-4xl font-bold mb-4">¡Hola!</h1>
    
    <!-- Subtítulo o nombre del test -->
    <h2 class="text-blue-600 text-3xl font-bold">Test Axion</h2>

    <!-- Aquí se pueden agregar componentes Livewire si se requiere -->
    <!-- Ejemplo de componente Livewire -->
</div>

<!-- =======================
     Tarjeta de actividad
     ======================= -->
<div class="flex flex-col items-center p-7 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition max-w-lg mx-auto">

    <!-- Información central de la actividad -->
    <div class="flex flex-col items-center space-y-3 text-center">

        <!-- Título de la actividad -->
        <span class="text-xl font-bold text-gray-800">Ejercicio de Programación</span>

        <!-- Subtítulo indicando tecnologías o tema -->
        <span class="text-sm text-gray-500 italic">PHP - MVC y POO</span>

        <!-- Descripción detallada del ejercicio -->
        <p class="text-gray-700 text-sm">
            Como parte del proceso de evaluación, debes desarrollar un script en PHP que imprima una pirámide de números según la entrada del usuario.
            El desarrollo debe implementarse usando el patrón <strong>MVC</strong> y programación orientada a objetos (<strong>POO</strong>).
        </p>

        <!-- Metadatos de la actividad -->
        <div class="flex items-center space-x-2 text-gray-400 text-sm">
            <span>Tipo: Ejercicio</span>
            <span>•</span>
            <span>Complejidad: Media</span>
        </div>

        <!-- Botón para acceder al test -->
        <a href="{{ route('pyramid.index') }}" 
            class="mt-4 px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Go to Test
        </a>
    </div>
</div>
@endsection
