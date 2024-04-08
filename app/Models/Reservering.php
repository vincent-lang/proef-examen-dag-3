<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    //* the fillable fields for the reservering
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

    //* the relationship between the reservering and the persoon
    public function Persoon()
    {
        return $this->belongsTo(Persoon::class);
    }

    //* the relationship between the reservering and the baan
    public function Baan()
    {
        return $this->belongsTo(Baan::class);
    }
}
