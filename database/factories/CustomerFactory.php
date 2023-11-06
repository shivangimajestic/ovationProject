<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName'=> $this->faker->firstName(),
            'lastName'=> $this->faker->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'addLine1'=> $this->faker->streetAddress(),
            'addLine2'=> $this->faker->streetName(),
            'city'=> $this->faker->city(),
            'state'=> $this->faker->state(),
            'country'=> $this->faker->country(),
            
        ];
    }
}
