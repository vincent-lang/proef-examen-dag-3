<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\Reservering;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Feature_01_Controller extends Controller
{
    public function index(Persoon $persoon)
    {
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->orderBy('Datum', 'desc')->get();
        $typePersonen = Persoon::with('TypePersoon')->get();
        return view('feature_01.index', compact('reserveringen', 'typePersonen', 'persoon'));
    }

    public function selectedIndex(Request $request, Persoon $persoon)
    {
        $datum = Carbon::parse($request->date)->format('Y');
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->where('Datum', 'like', $datum . "-%-%")->orderBy('Datum', 'desc')->get();
        $typePersonen = Persoon::with('TypePersoon')->get();
        return view('feature_01.index', compact('reserveringen', 'typePersonen', 'persoon'));
    }
}
