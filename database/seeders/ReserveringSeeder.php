<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Reservering::create([
            'persoon_id' => 1,
            'openingstijd_id' => 2,
            'tarief_id' => 1,
            'baan_id' => 8,
            'pakketOptie_id' => 1,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122000001',
            'Datum' => '2022-12-20',
            'AantalUren' => 1,
            'BeginTijd' => '15:00:00',
            'EindTijd' => '16:00:00',
            'AantalVolwassenen' => 4,
            'AantalKinderen' => 2,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Reservering::create([
            'persoon_id' => 2,
            'openingstijd_id' => 2,
            'tarief_id' => 1,
            'baan_id' => 2,
            'pakketOptie_id' => 3,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122000002',
            'Datum' => '2022-12-20',
            'AantalUren' => 1,
            'BeginTijd' => '17:00:00',
            'EindTijd' => '18:00:00',
            'AantalVolwassenen' => 4,
            'AantalKinderen' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Reservering::create([
            'persoon_id' => 3,
            'openingstijd_id' => 7,
            'tarief_id' => 2,
            'baan_id' => 3,
            'pakketOptie_id' => 1,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122400003',
            'Datum' => '0022-12-24',
            'AantalUren' => 2,
            'BeginTijd' => '16:00:00',
            'EindTijd' => '18:00:00',
            'AantalVolwassenen' => 4,
            'AantalKinderen' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Reservering::create([
            'persoon_id' => 1,
            'openingstijd_id' => 2,
            'tarief_id' => 1,
            'baan_id' => 6,
            'pakketOptie_id' => null,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122700004',
            'Datum' => '2022-12-27',
            'AantalUren' => 2,
            'BeginTijd' => '17:00:00',
            'EindTijd' => '19:00:00',
            'AantalVolwassenen' => 2,
            'AantalKinderen' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Reservering::create([
            'persoon_id' => 4,
            'openingstijd_id' => 3,
            'tarief_id' => 1,
            'baan_id' => 4,
            'pakketOptie_id' => 4,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122800005',
            'Datum' => '2022-12-28',
            'AantalUren' => 1,
            'BeginTijd' => '14:00:00',
            'EindTijd' => '15:00:00',
            'AantalVolwassenen' => 3,
            'AantalKinderen' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Models\Reservering::create([
            'persoon_id' => 5,
            'openingstijd_id' => 10,
            'tarief_id' => 3,
            'baan_id' => 5,
            'pakketOptie_id' => 4,
            'reserveringStatus_id' => 1,
            'Reserveringsnummer' => '2022122800006',
            'Datum' => '2022-12-28',
            'AantalUren' => 2,
            'BeginTijd' => '19:00:00',
            'EindTijd' => '21:00:00',
            'AantalVolwassenen' => 2,
            'AantalKinderen' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
