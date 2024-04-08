<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\Reservering;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Feature_01_Controller extends Controller
{
    //* this function is used to show the index page of the feature_01
    //* and get all the reserveringen of the persoon and role the person has
    public function index(Persoon $persoon)
    {
        //* get all the reserveringen of the persoon
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->orderBy('Datum', 'desc')->get();
        //* get all the type personen
        $typePersonen = Persoon::with('TypePersoon')->get();
        //* return the view with the reserveringen, type personen and the persoon
        return view('feature_01.index', compact('reserveringen', 'typePersonen', 'persoon'));
    }

    //* this function is used to show the index page when you select a date
    //* and based on the date it gives a periode of the reserveringen
    public function selectedIndex(Request $request, Persoon $persoon)
    {
        //* get the date and format it to a year
        $datum = Carbon::parse($request->date)->format('Y');
        //* get all the reserveringen of the persoon based on the date
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->where('Datum', 'like', $datum . "-%-%")->orderBy('Datum', 'desc')->get();
        //* get all the type personen
        $typePersonen = Persoon::with('TypePersoon')->get();
        //* return the view with the reserveringen, type personen and the persoon
        return view('feature_01.index', compact('reserveringen', 'typePersonen', 'persoon'));
    }
}
