<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TeamSeeder::class,
            PlayerSeeder::class,
            ToernooiSeeder::class,
            UserSeeder::class,
        ]);
    }
}
