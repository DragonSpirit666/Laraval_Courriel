<?php

namespace Database\Factories;

use App\Models\Courriel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Courriel>
 */
class CourrielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => Str::random(10),
            'envoyeur' => $this->faker->email,
            'contenu' => $this->faker->text,
            'lu' => $this->faker->boolean,
            ];
    }
}
