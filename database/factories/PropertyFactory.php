<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // مضيف مرتبط
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'location' => fake()->city(),
            'capacity' => fake()->numberBetween(1, 10),
            'price_per_night' => fake()->randomFloat(2, 50, 500),
        ];
    }
}
