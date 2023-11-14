<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderNumber'=> $this->faker->unique()->numerify('OV-######'),
            'orderDetails'=> $this->faker->sentence(3),
            'status'=> $this->faker->randomElement(['Order Placed', 'Shipped', 'Out for Delivery']),
            'orderDate'=> $this->faker->dateTime(),
            'paymentMode'=> $this->faker->randomElement(['UPI', 'Credit Card', 'Cash on Delivery']),
            'totalAmount'=> $this->faker->numberBetween(500,1000),
            'customerId'=> $this->faker->numberBetween(1,50),
        ];
    }
}
