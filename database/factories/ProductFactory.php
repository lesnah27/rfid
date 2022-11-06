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
            'name' => "Product {$this->faker->firstName}",
            'description' => $this->faker->text(30),
            'unit_price' => $this->faker->randomFloat(2, 1, 200),
            'quantity' => $this->faker->randomDigit,
            'total_cost' => $this->faker->randomFloat(2, 100, 1000)
        ];
    }
}
