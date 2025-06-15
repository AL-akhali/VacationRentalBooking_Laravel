<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Seeder المستخدمين
        $this->call([
            UserSeeder::class,
            PropertySeeder::class,
            PropertyPricingRuleSeeder::class,

        ]);

        // مستخدم ثابت
        $host = User::factory()->create([
            'name' => 'Test Host',
            'email' => 'host@example.com',
            'role' => 'host',
        ]);
    }
}
