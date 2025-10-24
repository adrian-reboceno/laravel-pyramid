<?php

namespace App\Livewire\Examples;

use Livewire\Component;
use App\Models\Pyramid as PyramidModel;

/**
 * Componente Livewire Pyramid
 * 
 * Este componente permite generar dinámicamente pirámides numéricas
 * en la interfaz, con opciones de tipo, alineación, número de filas y base.
 * También soporta pirámides "colorful" (con bloques de colores).
 */
class Pyramid extends Component
{
    /**
     * @var int Número base para multiplicar los valores de la pirámide.
     */
    public int $base = 1;

    /**
     * @var int Número de filas de la pirámide.
     */
    public int $rows = 10;

    /**
     * @var string Alineación de la pirámide: 'left', 'center' o 'right'.
     */
    public string $alignment = 'center';

    /**
     * @var string Tipo de pirámide: 'triangle' o 'diamond'.
     */
    public string $type = 'triangle';

    /**
     * @var array Arreglo que contiene las filas generadas de la pirámide.
     */
    public array $lines = [];

    /**
     * @var bool Indica si la pirámide será colorida (bloques con colores).
     */
    public bool $colorful = false;

    /**
     * @var array Reglas de validación para las propiedades del componente.
     */
    protected $rules = [
        'base' => 'required|integer|min:1',
        'rows' => 'required|integer|min:1|max:20',
        'alignment' => 'required|in:left,center,right',
        'type' => 'required|in:triangle,diamond',
        'colorful' => 'boolean',
    ];

    /**
     * Método que se ejecuta al inicializar el componente.
     * Genera la pirámide con los valores por defecto.
     */
    public function mount()
    {
        $this->generate();
    }

    /**
     * Método que se ejecuta cuando se actualiza alguna propiedad del componente.
     * Valida solo la propiedad que cambió y vuelve a generar la pirámide.
     *
     * @param string $property Nombre de la propiedad que cambió.
     */
    public function updated($property)
    {
        $this->validateOnly($property);
        $this->generate();
    }

    /**
     * Genera la pirámide usando el modelo Pyramid.
     * Valida todas las propiedades antes de generar las filas.
     */
    public function generate()
    {
        $this->validate();
        $pyramid = new PyramidModel($this->base, $this->rows, $this->alignment, $this->type);
        $this->lines = $pyramid->generate();
    }

    /**
     * Renderiza la vista del componente.
     *
     * @return \Illuminate\View\View Retorna la vista 'livewire.examples.pyramid'.
     */
    public function render()
    {
        return view('livewire.examples.pyramid');
    }
}
