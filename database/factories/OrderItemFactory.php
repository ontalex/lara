<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "quantity" => fake()->numberBetween(1, 10),
            "order_id" => fake()->numberBetween(1, 20),
            "product_id" => fake()->numberBetween(1, 5)
        ];
    }
}
