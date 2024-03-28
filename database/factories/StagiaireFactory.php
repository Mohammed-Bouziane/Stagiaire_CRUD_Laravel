<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

use Illuminate\Database\Eloquent\Factories\Factory;

class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name,
            'prenom' => fake()->name,
            // 'email' =>fake()->email,
            'email'=>(string)$this->faker->unique()->safeEmail,
            'adresse' => fake()->city,
        ];
    }
}

// 'nom'=>fake()->name,
// 'prenom'=>fake()->name,
// 'email'=>(string)$this->faker->unique()->safeEmail,
// 'adresse'=>(string)$this->faker->unique()->city
