<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthImpact>
 */
class HealthImpactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jump_count' => $this->faker->numberBetween(100, 1000),
            'calories_burned' => $this->faker->numberBetween(10, 100),
            'heart_health' => $this->faker->sentence(),
            'muscle_strength' => $this->faker->sentence(),
            'flexibility' => $this->faker->sentence(),
        ];
    }
}
