<?php

namespace Database\Factories;

use App\Models\produits;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'quantite' => fake()->randomNumber(),
            'prix' => fake()->randomFloat(2, 0, 100),

        ];
    }
}
