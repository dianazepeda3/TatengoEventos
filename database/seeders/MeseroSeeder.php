<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeseroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meseros = [
            [
                'nombre' => 'Mesero1',
                'telefono' => '6457287547',
                'puesto' => 'puesto',
                'sueldo' => '1200',
                'estatus' => '1',
            ],
            [
                'nombre' => 'Mesero2',
                'telefono' => '8657382738',
                'puesto' => 'puesto2',
                'sueldo' => '1000',
                'estatus' => '2',
            ],
            [
                'nombre' => 'Mesero3',
                'telefono' => '3365783948',
                'puesto' => 'puesto3',
                'sueldo' => '2100',
                'estatus' => '1',
            ],
            [
                'nombre' => 'Mesero5',
                'telefono' => '3376489278',
                'puesto' => 'puesto4',
                'sueldo' => '1200',
                'estatus' => '2',
            ],
            [
                'nombre' => 'Mesero6',
                'telefono' => '8456437346',
                'puesto' => 'puesto5',
                'sueldo' => '950',
                'estatus' => '3',
            ],          
        ];

        foreach ($meseros as $mesero) {
            \App\Models\Mesero::create($mesero);
        }    
    }
}
