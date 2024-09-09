<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\FitnessGoal;
use App\Models\HealthImpact;
use App\Models\SkippingRecord;
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
         User::factory(5)->create();

         SkippingRecord::factory(10)->create();

         FitnessGoal::factory(10)->create();

         Achievement::factory(10)->create();

         HealthImpact::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
