<?php

namespace Database\Seeders;

use App\Models\Courriel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
