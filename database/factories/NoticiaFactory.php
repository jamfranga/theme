<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
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
            'titulo' => $name,
            'slug' => Str::slug($name,'-'),
            'resumen' => $this->faker->paragraph(),
            'texto' => $this->faker->paragraph(),
            'fecha_noticia' => $this->faker->dateTime(),
            'id_categoria' => $this->faker->randomElement([1,2,3]),
            'id_usuario' => $this->faker->randomElement([1,2,3])
        ];
    }
}
