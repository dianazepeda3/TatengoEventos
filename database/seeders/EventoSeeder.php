<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventos = [
            [
                'nombre' => 'Evento1',
                'nombre_cliente' => 'Cliente1',
                'cotizacion' => '1200',
                'cantidad_pagada' => '500',
                'fecha_evento' => '2023-05-31',
                'ubicacion' => 'ubicacion1',
                'categoria_id' => '14',
                'user_id' => '3',
                'descripcion' => 'Descripción Categoría 1',
            ],   
            [
                'nombre' => 'Evento2',
                'nombre_cliente' => 'Cliente2',
                'cotizacion' => '1200',
                'cantidad_pagada' => '500',
                'fecha_evento' => '2023-05-31',
                'ubicacion' => 'ubicacion1',
                'categoria_id' => '15',
                'user_id' => '4',
                'descripcion' => 'Descripción Categoría 1',
            ],           
        ];

        // Insertar los datos en la tabla eventos
        foreach ($eventos as $evento) {
            \App\Models\Evento::create($evento);
        }
    }    
}
