<?php

namespace Database\Seeders;

use App\Models\Courriel;
use Illuminate\Database\Seeder;

class CourrielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courriel::factory()
            ->count(20)
            ->create();
    }
}
