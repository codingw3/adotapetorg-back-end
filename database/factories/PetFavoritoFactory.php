<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetFavorito>
 */
class PetFavoritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 3),
            'pet_id' => fake()->numberBetween(1, 20),
            'flg_ativo' => fake()->boolean(),
        ];
    }
}
