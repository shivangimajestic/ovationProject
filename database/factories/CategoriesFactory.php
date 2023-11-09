<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoryImage'=> $this->faker->imageUrl(200, 200, 'surgical-products'),
            'categoryName'=> $this->faker->randomElement(['Microsurgery Instrumennts', 'Cannulas', 'Eye Drapes','Knives']),
            'categoryDetails'=> $this->faker->sentence(7),
        ];
    }
}
