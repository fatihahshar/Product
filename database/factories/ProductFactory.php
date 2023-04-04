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
    public function definition(): array
    {
        return [
            'productname' => $this->faker->words(rand(2,3),true),
            'productdesc' => $this->faker->text(50),
            'quantity' => $this->faker->numberBetween(1,10),
        ];
    }
}
