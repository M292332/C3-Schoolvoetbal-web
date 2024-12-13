<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $name = [
            'Ajax', 'PSV Eindhoven', 'Feyenoord', 'AZ Alkmaar', 'Vitesse',
            'FC Utrecht', 'FC Groningen', 'SC Heerenveen', 'PEC Zwolle', 'Willem II'
        ];

        foreach ($name as $name) {
            Team::create([
                'name' => $name,
            ]);
        }
    }
}
