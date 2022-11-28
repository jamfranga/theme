<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoticiaCategoria>
 */
class NoticiaCategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->sentence();

        return [
            //
            'categoria' => $name,
            'slug' => Str::slug($name,'-'),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
