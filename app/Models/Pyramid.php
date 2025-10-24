<?php

namespace App\Models;

/**
 * Clase Pyramid
 * 
 * Esta clase permite generar pirámides numéricas de diferentes tipos (triángulo o diamante)
 * multiplicando los números por un valor base definido.
 */
class Pyramid
{
    /**
     * @var int Número base que se multiplicará en cada nivel de la pirámide.
     */
    public int $base;

    /**
     * @var int Número de filas o niveles que tendrá la pirámide.
     */
    public int $rows;

    /**
     * @var string Alineación de la pirámide. Valores posibles: 'left', 'center', 'right'.
     */
    public string $alignment;

    /**
     * @var string Tipo de pirámide. Valores posibles: 'triangle' o 'diamond'.
     */
    public string $type;

    /**
     * Constructor de la clase Pyramid.
     * 
     * @param int $base Número base para la pirámide. Por defecto 1.
     * @param int $rows Número de filas de la pirámide. Por defecto 10.
     * @param string $alignment Alineación de la pirámide. Por defecto 'center'.
     * @param string $type Tipo de pirámide ('triangle' o 'diamond'). Por defecto 'triangle'.
     */
    public function __construct(int $base = 1, int $rows = 10, string $alignment = 'center', string $type = 'triangle')
    {
        $this->base = $base;
        $this->rows = $rows;
        $this->alignment = $alignment;
        $this->type = $type;
    }

    /**
     * Genera la pirámide completa como un arreglo de filas.
     * 
     * Cada fila es un arreglo de números multiplicados por la base.
     * 
     * @return array Arreglo bidimensional que representa la pirámide.
     */
    public function generate(): array
    {
        $result = [];

        // Generar la mitad superior de la pirámide
        for ($i = 1; $i <= $this->rows; $i++) {
            $result[] = $this->generateRow($i);
        }

        // Si el tipo es "diamond", agregar la mitad inferior invertida
        if ($this->type === 'diamond') {
            for ($i = $this->rows - 1; $i >= 1; $i--) {
                $result[] = $this->generateRow($i);
            }
        }

        return $result;
    }

    /**
     * Genera una fila de la pirámide.
     * 
     * La fila incluye números descendentes desde el nivel hasta 1, 
     * y luego ascendentes desde 2 hasta el nivel, multiplicados por la base.
     * 
     * @param int $level Nivel actual de la fila.
     * @return array Arreglo de números de la fila.
     */
    private function generateRow(int $level): array
    {
        $descending = [];
        for ($i = $level; $i >= 1; $i--) {
            $descending[] = $i * $this->base;
        }

        $ascending = [];
        for ($i = 2; $i <= $level; $i++) {
            $ascending[] = $i * $this->base;
        }

        return array_merge($descending, $ascending);
    }
}
