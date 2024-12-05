<?php

namespace Database\Seeders;

use App\Models\Toernooi;
use App\Models\Team;
use Illuminate\Database\Seeder;

class ToernooiSeeder extends Seeder
{
    public function run(): void
    {
        // Definieer een lijst van toernooititels
        $titles = [
            'Kampioenschap Amsterdam',
            'Zomer Toernooi Rotterdam',
            'Winter Cup Utrecht',
            'Eindhoven Toernooi',
            'Friese Voetbalbeker',
            'Nationaal Jeugdtoernooi',
            'International Cup Den Haag',
            'Groninger Voetbal Open',
            'Zuid Holland Toernooi',
            'Noord Nederland Kampioenschap'
        ];

        // Loop door de lijst van toernooititels en maak een toernooi voor elk van hen
        foreach ($titles as $title) {
            $toernooi = Toernooi::create([
                'title' => $title,
                'max_teams' => 16, // Bijv. maximaal 16 teams per toernooi
                'started' => now(), // Je kunt hier ook een specifieke startdatum gebruiken
            ]);

            // Voeg 5 teams toe aan elk toernooi
            $teamNames = [
                'Ajax', 'PSV Eindhoven', 'Feyenoord', 'AZ Alkmaar', 'Vitesse',
                'FC Utrecht', 'FC Groningen', 'SC Heerenveen', 'PEC Zwolle', 'Willem II'
            ];

            // Kies 5 willekeurige teams uit de lijst en koppel ze aan het toernooi
            $teams = Team::inRandomOrder()->take(5)->get();
            $toernooi->teams()->attach($teams);
        }
    }
}
