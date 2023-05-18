<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'categoria_de' => 'Productos',
                'nombre' => 'Sillas',
                'descripcion' => 'Descripción Categoría 1',
            ],
            [
                'categoria_de' => 'Productos',
                'nombre' => 'Mesas',
                'descripcion' => 'Descripción Categoría 2',
            ],
            [
                'categoria_de' => 'Productos',
                'nombre' => 'Manteles',
                'descripcion' => 'Descripción Categoría 3',
            ],
            [
                'categoria_de' => 'Productos',
                'nombre' => 'Cubresillas',
                'descripcion' => 'Descripción Categoría 4',
            ],
            [
                'categoria_de' => 'Eventos',
                'nombre' => 'Boda',
                'descripcion' => 'Descripción Categoría 5',
            ],
            [
                'categoria_de' => 'Eventos',
                'nombre' => 'Fiesta de XV',
                'descripcion' => 'Descripción Categoría 6',
            ],
            [
                'categoria_de' => 'Eventos',
                'nombre' => 'Aniversario',
                'descripcion' => 'Descripción Categoría 7',
            ],
            [
                'categoria_de' => 'Eventos',
                'nombre' => 'Posada',
                'descripcion' => 'Descripción Categoría 8',
            ],
        ];

        // Insertar los datos en la tabla categorias
        foreach ($categorias as $categoria) {
            \App\Models\Categoria::create($categoria);
        }
    }
}
