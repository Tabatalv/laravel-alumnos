<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\AlumnoFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            AlumnoSeeder::class,
            ProyectosSeeder::class,
        ]);
    }
}
