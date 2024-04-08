<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //* these fill the table type_persoons with this data
        \App\Models\TypePersoon::create([
            'Naam' => 'Klant',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\TypePersoon::create([
            'Naam' => 'Medewerker',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\TypePersoon::create([
            'Naam' => 'Gast',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
