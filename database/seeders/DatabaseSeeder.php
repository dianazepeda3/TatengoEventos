<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'diana',
             'email' => 'diana@hotmail.com',
             'password' => bcrypt('diana123'),
             'isAdmin' => true,
         ]);

         \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'isAdmin' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'empleado',
            'email' => 'empleado@gmail.com',
            'password' => bcrypt('empleado123'),
            'isEmpleado' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('cliente123'),
        ]);
    }
}
