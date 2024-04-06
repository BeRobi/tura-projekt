<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turatipus>
 */
class TuratipusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             //'tipus_id' => rand(1, 1000),
             'turanev' => fake('hu_HU')->word(),
             'tajegyseg' => fake('hu_HU')->state(),
             'nehezseg' => rand(1, 5),
             'tavolsag' => rand(11, 99),
             'szintkulonbseg' => rand(1, 1000),
             'kerekpar' => rand(0, 1),
             'indulashelye' => fake('hu_HU')->word(),
             'erkezeshelye' => fake('hu_HU')->word(),
             'leiras' => fake('hu_HU')->word(),
        ];
    }
}
