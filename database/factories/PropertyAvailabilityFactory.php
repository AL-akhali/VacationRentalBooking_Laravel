<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyAvailability>
 */
class PropertyAvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id' => \App\Models\Property::factory(),
            'date' => now()->addDays(rand(0, 60))->toDateString(),
            'is_available' => fake()->boolean(80), // 80% الأيام متاحة
        ];
    }

}
