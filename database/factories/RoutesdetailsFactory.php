<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoutesdetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase(),
            'image' => 'https://picsum.photos/800/600',
            'distance'=> $this->faker->text(),
            'elevationgain'=> $this->faker->text(),
            'difficulty'=> $this->faker->text(),
        ];
    }
}
