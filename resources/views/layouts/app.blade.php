<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título de la página dinámico -->
    <title>@yield('title', 'Mi App')</title>
    
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    
    <!-- Estilos de Livewire -->
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans text-gray-800 flex flex-col min-h-screen">

    <!-- =======================
         Navbar principal
         ======================= -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-3 px-4 md:px-6">
            
            <!-- Logo / Nombre de la app -->
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-500 transition">Mi Test App</a>
            
            <!-- Menú de navegación -->
            <div class="space-x-6">
                <a href="/" class="text-gray-700 font-medium hover:text-blue-500 transition">Home</a>
                <a href="{{ route('pyramid.index') }}" class="text-gray-700 font-medium hover:text-blue-500 transition">Test</a>
            </div>
        </div>
    </nav>

    <!-- =======================
         Contenido principal
         ======================= -->
    <main class="container mx-auto p-6 flex-grow">
        <!-- Aquí se inserta el contenido de cada vista -->
        @yield('content')
    </main>

    <!-- =======================
         Footer
         ======================= -->
    <footer class="bg-white shadow p-4 text-center">
        &copy; {{ date('Y') }} Mi App. Todos los derechos reservados.
    </footer>

    <!-- Scripts de Livewire -->
    @livewireScripts
</body>
</html>
