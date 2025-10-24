<div>
    <!-- Contenedor principal de la pirámide -->
    <div class="p-6 max-w-5xl mx-auto bg-white shadow-xl rounded-2xl">
        
        <!-- Título del generador -->
        <h2 class="text-2xl font-bold text-blue-600 mb-4 text-center">
            Dynamic Number Pyramid Generator
        </h2>

        <!-- =======================
             Controles del generador
             ======================= -->
        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 justify-center items-start mb-6">
            
            <!-- Base Number: número base para multiplicar -->
            <div class="flex flex-col">
                <label class="block text-gray-700 text-sm font-semibold">Base Number</label>
                <input type="number" wire:model="base" min="1"
                    class="border rounded-lg px-3 py-2 w-28 text-center focus:ring focus:ring-blue-300" />
                <!-- Mensaje de error si la validación falla -->
                @error('base')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Number of Rows: número de filas de la pirámide -->
            <div class="flex flex-col">
                <label class="block text-gray-700 text-sm font-semibold">Number of Rows</label>
                <input type="number" wire:model="rows" min="1" max="20"
                    class="border rounded-lg px-3 py-2 w-28 text-center focus:ring focus:ring-blue-300" />
                @error('rows')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Alignment: alineación de la pirámide -->
            <div class="flex flex-col">
                <label class="block text-gray-700 text-sm font-semibold">Alignment</label>
                <select wire:model="alignment"
                    class="border rounded-lg px-3 py-2 w-32 focus:ring focus:ring-blue-300">
                    <option value="center">Center</option>
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                </select>
            </div>

            <!-- Type: tipo de pirámide -->
            <div class="flex flex-col">
                <label class="block text-gray-700 text-sm font-semibold">Type</label>
                <select wire:model="type"
                    class="border rounded-lg px-3 py-2 w-32 focus:ring focus:ring-blue-300">
                    <option value="triangle">Triangle</option>
                    <option value="diamond">Diamond</option>
                </select>
            </div>

            <!-- Colorful Blocks: opción para mostrar bloques de colores -->
            <div class="flex items-center mt-2 md:mt-0">
                <input type="checkbox" wire:model="colorful" id="colorful" class="mr-2">
                <label for="colorful" class="text-gray-700 text-sm font-semibold">Colorful Blocks</label>
            </div>

            <!-- Botón para refrescar la pirámide -->
            <div class="flex flex-col">
                <button wire:click="generate"
                    class="mt-3 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Refresh Pyramid
                </button>
            </div>
        </div>

        <!-- =======================
             Resultados de la pirámide
             ======================= -->
        <div class="text-center font-mono text-lg">
            @foreach ($lines as $line)
                @php
                    // Determina la clase de alineación según la opción seleccionada
                    $alignmentClass = match($alignment) {
                        'left' => 'text-left',
                        'right' => 'text-right',
                        default => 'text-center',
                    };

                    // Colores disponibles para los bloques coloridos
                    $colors = ['bg-blue-100 text-blue-700', 'bg-green-100 text-green-700', 'bg-yellow-100 text-yellow-700', 'bg-purple-100 text-purple-700'];
                @endphp

                <!-- Fila de números de la pirámide -->
                <div class="{{ $alignmentClass }} leading-tight my-1">
                    @foreach ($line as $index => $number)
                        @php
                            // Determina el color del bloque según la opción "colorful"
                            $colorClass = $colorful ? $colors[$index % count($colors)] : 'bg-blue-100 text-blue-700';
                        @endphp
                        <span class="inline-block w-6 h-6 {{ $colorClass }} font-semibold rounded shadow-sm hover:bg-opacity-80 transition">
                            {{ $number }}
                        </span>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
