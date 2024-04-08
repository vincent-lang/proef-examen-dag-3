<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePersoon extends Model
{
    use HasFactory;

    //* the fillable fields for the type persoon
    protected $fillable = [
        'Naam',
    ];

    //* the relationship between the type persoon and the persoon
    public function Persoon()
    {
        return $this->hasOne(Persoon::class);
    }
}
