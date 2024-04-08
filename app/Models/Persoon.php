<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $fillable = [
        'typePersoon_id',
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Roepnaam',
        'IsVolwassen',
    ];
}
