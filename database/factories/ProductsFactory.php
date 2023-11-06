<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productName'=> $this->faker->randomElement(['Microsurgery Sissors', 'Spevulums', 'Retractors','Caliper','Knives' , 'Hooks' , 'Baraquer Needle Holder']),
            'productPrice'=> $this->faker->numberBetween(50,100),
            'SKU'=> $this->faker->bothify('??####??'),
            'productCategory'=> $this->faker->randomElement(['Microsurgery Instrumennts', 'Cannulas', 'Eye Drapes','Knives']),
            'tags'=> $this->faker->randomElement(['Best Seller', 'Special Offer', 'Disposable']),
        ];
    }
}
