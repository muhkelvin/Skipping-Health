<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FitnessGoal>
 */
class FitnessGoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,5),
            'daily_target' => $this->faker->numberBetween(100, 1000),
            'weekly_target' => $this->faker->numberBetween(700, 7000),
        ];
    }
}
