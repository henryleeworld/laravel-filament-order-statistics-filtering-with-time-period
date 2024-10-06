<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number'     => 'OR' . fake()->unique()->randomNumber(6),
            'status'     => fake()->randomElement(['new', 'confirmed', 'cancelled']),
            'created_at' => fake()->dateTimeBetween('-1 year'),
        ];
    }
}
