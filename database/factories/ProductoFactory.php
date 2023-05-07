<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Producto::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'categoria_id' => Categoria::where('categoria_de', '=', 'Productos')->get()->random()->id,
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'color' => $this->faker->randomElement(['Blanco', 'Negro', 'Rosa', 'Azul']),
            'total' => $this->faker->randomDigit(),
            'disponible' => $this->faker->randomDigit(),
            'descripcion' => $this->faker->word(),                    
        ];
    }
}
