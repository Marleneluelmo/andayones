<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cardroute>
 */
class CardrouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase(),
            'image' => 'https://picsum.photos/800/600',
            'distancia'=> $this->faker->text(),
            'desnivel'=> $this->faker->text(),
            'dificultad'=> $this->faker->text(),
        ];
    }
}
