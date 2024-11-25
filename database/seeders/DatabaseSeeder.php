<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TechnologySeeder::class,
            TypeSeeder::class,
            ProjectSeeder::class,
            ProjectTechnologySeeder::class,
        ]);
    }
}