<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Property;
use App\Models\PropertyAvailability;



class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::where('role', 'host')->get()->each(function ($user) {
            Property::factory()->count(3)->create([
                'user_id' => $user->id,
            ]);
        });
        Property::all()->each(function ($property) {
            // توليد توفّر لثلاثين يومًا قادمة
            for ($i = 0; $i < 30; $i++) {
                PropertyAvailability::create([
                    'property_id' => $property->id,
                    'date' => now()->addDays($i)->toDateString(),
                    'is_available' => rand(0, 1),
                ]);
            }
        });
    }
}
