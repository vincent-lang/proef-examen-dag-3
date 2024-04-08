<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    protected $fillable = [
        'persoon_id',
        'openingstijd_id',
        'tarief_id',
        'baan_id',
        'pakketOptie_id',
        'reserveringStatus_id',
        'Reserveringsnummer',
        'Datum',
        'AantalUren',
        'BeginTijd',
        'EindTijd',
        'AantalVolwassenen',
        'AantalKinderen',
    ];
}
