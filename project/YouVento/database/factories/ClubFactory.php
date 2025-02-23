<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'logo' => $this->faker->imageUrl(),
            'categorie' => $this->faker->randomElement(['Sports', 'Music', 'Technology', 'Art']),
            'tag' => $this->faker->name(),
        ];
    }
}
