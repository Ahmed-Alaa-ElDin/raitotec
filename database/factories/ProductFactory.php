<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->bothify('laptop00#.jpg'),
            'price' => fake()->randomFloat(2, 1, 1000),
            'image_name' => fake()->bothify('laptop00#.jpg')
        ];
    }
}
