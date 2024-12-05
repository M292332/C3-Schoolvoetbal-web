<?php

namespace Database\Factories;

use App\Models\Toernooi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toernooi>
 */
class ToernooiFactory extends Factory
{
    protected $model = Toernooi::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(), // Aangenomen dat 'title' een tekst is
            'max_teams' => $this->faker->numberBetween(2, 20), // Maximaal aantal teams, kan aangepast worden
            'started' => $this->faker->dateTimeThisYear(), // Aangemaakte starttijd voor het toernooi
        ];
    }
}
