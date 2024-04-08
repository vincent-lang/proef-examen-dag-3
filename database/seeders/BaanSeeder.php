<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Baan::create([
            'Nummer' => 1,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 2,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 3,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 4,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 5,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 6,
            'HeeftHek' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 7,
            'HeeftHek' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Baan::create([
            'Nummer' => 8,
            'HeeftHek' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
