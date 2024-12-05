<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        // Definieer een lijst met teamnamen
        $name = [
            'Ajax', 'PSV Eindhoven', 'Feyenoord', 'AZ Alkmaar', 'Vitesse',
            'FC Utrecht', 'FC Groningen', 'SC Heerenveen', 'PEC Zwolle', 'Willem II'
        ];

        // Loop door de lijst van teamnamen en maak een nieuw team voor elk van hen
        foreach ($name as $name) {
            Team::create([
                'name' => $name, // Vul de naam in
            ]);
        }
    }
}
