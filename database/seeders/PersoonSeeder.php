<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Persoon::create([
            'typePersoon_id' => 1,
            'Voornaam' => 'Mazin',
            'Tussenvoegsel' => null,
            'Achternaam' => 'Jamil',
            'Roepnaam' => 'Mazin',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 1,
            'Voornaam' => 'Arjan',
            'Tussenvoegsel' => 'de',
            'Achternaam' => 'Ruijter',
            'Roepnaam' => 'Arjan',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 1,
            'Voornaam' => 'Hans',
            'Tussenvoegsel' => null,
            'Achternaam' => 'Odijk',
            'Roepnaam' => 'Hans',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 1,
            'Voornaam' => 'Dennis',
            'Tussenvoegsel' => 'van',
            'Achternaam' => 'Wakeren',
            'Roepnaam' => 'Dennis',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 2,
            'Voornaam' => 'Wilco',
            'Tussenvoegsel' => 'van de',
            'Achternaam' => 'Grift',
            'Roepnaam' => 'Wilco',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 3,
            'Voornaam' => 'Tom',
            'Tussenvoegsel' => null,
            'Achternaam' => 'Sanders',
            'Roepnaam' => 'Tom',
            'IsVolwassen' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 3,
            'Voornaam' => 'Andrew',
            'Tussenvoegsel' => null,
            'Achternaam' => 'Sanders',
            'Roepnaam' => 'Andrew',
            'IsVolwassen' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Persoon::create([
            'typePersoon_id' => 3,
            'Voornaam' => 'Julian',
            'Tussenvoegsel' => null,
            'Achternaam' => 'Kaldenheuvel',
            'Roepnaam' => 'Julian',
            'IsVolwassen' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
