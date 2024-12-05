<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        // Voor elk team voeg 5 spelers toe
        Team::all()->each(function ($team) {
            Player::factory()->count(5)->create(['team_id' => $team->id]);
        });
    }
}
