<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baan extends Model
{
    use HasFactory;

    //* the fillable fields for the baan
    protected $fillable = [
        'Nummer',
        'HeeftHek',
    ];

    //* the relationship between the baan and the reservering
    public function Reservering()
    {
        return $this->hasOne(Reservering::class);
    }
}
