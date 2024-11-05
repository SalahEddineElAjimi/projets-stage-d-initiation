<?php

namespace Database\Factories;

use App\Models\documents;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->name(),
            'contenu' => fake()->paragraphs(3,true),
            'auteur' => fake()->name(),
            'file_path' => 'documents/' . Str::random(10) . '.pdf',
        ];
    }
}
