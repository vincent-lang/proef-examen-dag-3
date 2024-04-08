<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    //* the fillable fields for the persoon
    protected $fillable = [
        'type_persoon_id',
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Roepnaam',
        'IsVolwassen',
    ];

    //* the relationship between the persoon and the type persoon
    public function TypePersoon()
    {
        return $this->belongsTo(TypePersoon::class);
    }

    //* the relationship between the persoon and the reservering
    public function Reservering()
    {
        return $this->hasMany(Reservering::class);
    }
}
