<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Property;


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
    }
}
