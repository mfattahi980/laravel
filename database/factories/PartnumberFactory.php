<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partnumber>
 */
class PartnumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "mfg_pn" => fake()->text(16),
            "clean_pn" => fake()->text(16),
            "group_id" => 1,
            "description" => fake()->text(60),
        ];
    }
}
