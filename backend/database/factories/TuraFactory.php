<?php

namespace Database\Factories;

use App\Models\Turatipus;
use App\Models\Turavezeto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tura>
 */
class TuraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipus_id' => Turatipus::all()->random()->tipus_id,
            'idopont' => fake()->dateTimeBetween('2024-03-01', '2024-10-10'),
            'turavezeto' => Turavezeto::all()->random()->id,
            'ar' => rand(1, 5),
            'min_letszam' => rand(1, 50),
            'max_letszam' => rand(50, 100),
            //'statusz'=> rand(1, 2)
        ];
    }
}
