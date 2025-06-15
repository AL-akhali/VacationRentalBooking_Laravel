<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\PropertyPricingRule;

class PropertyPricingRuleSeeder extends Seeder
{
    public function run(): void
    {
        Property::all()->each(function ($property) {
            PropertyPricingRule::create([
                'property_id' => $property->id,
                'min_stay' => 2,
                'max_stay' => 14,
                'check_in_time' => '15:00:00',
                'check_out_time' => '11:00:00',
            ]);
        });
    }
}
