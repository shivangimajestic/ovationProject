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
            'prdt_name'=> $this->faker->randomElement(['Microsurgery Sissors', 'Spevulums', 'Retractors','Caliper','Knives' , 'Hooks' , 'Baraquer Needle Holder']),
            // 'prdt_category'=> $this->faker->randomElement(['Microsurgery Instrumennts', 'Cannulas', 'Eye Drapes','Knives']),
            // 'user'=> $this->faker->firstName(),
            // 'price'=> $this->faker->numberBetween(50,100),
            // 'quantity'=>$this->faker->numberBetween(1,10),
        ];
    }
}
