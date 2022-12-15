<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2, true),
            'description' => $this->faker->sentence(rand(3, 9), true),
            'image' => $this->faker->imageUrl(),
            'price' => rand(1000, 15000),
            'active' => $this->faker->boolean(80)
        ];
    }
}
