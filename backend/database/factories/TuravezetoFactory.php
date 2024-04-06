<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turavezeto>
 */
class TuravezetoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('hu_HU')->name(),
            'email' => fake('hu_HU')->email(),
            'cim' => fake('hu_HU')->address(),
            'telefonszam' => rand(111111, 9999999),
            'belepesdatuma' => fake()->dateTimeBetween('2000-01-01', '2023-10-10')
        ];
    }
}
