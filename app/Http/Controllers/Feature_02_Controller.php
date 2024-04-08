<?php

namespace App\Http\Controllers;

use App\Models\Baan;
use App\Models\Persoon;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Feature_02_Controller extends Controller
{
    //* this function is used to show the index page of the feature_02
    //* and get all the reserveringen of the persoon
    public function index(Persoon $persoon)
    {
        //* get all the reserveringen of the persoon
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->with('Baan')->get();
        //* return the view with the reserveringen and the persoon
        return view('feature_02.index', compact('reserveringen', 'persoon'));
    }

    //* this function is used to show the edit page of the feature_02
    //* and get all the banen
    public function edit(Persoon $persoon, Baan $baan)
    {
        //* get all the banen
        $banen = Baan::all();
        //* return the view with the persoon, banen and the baan
        return view('feature_02.edit', compact('persoon', 'banen', 'baan'));
    }

    //* this function is used to update the baan of the reservering
    //* and check if the baan has a hekje
    public function update(Request $request, Persoon $persoon, Baan $baan)
    {
        //* get the baan based on the id
        $controle = Baan::where('id', $request->baan_id)->get();
        //* check if the baan has a hekje
        if ($controle[0]->HeeftHek == 0) {
            //* return the view with an error message
            return redirect(route('feature_02.edit', [$persoon->id, $baan->id]))->with('error', 'Deze baan is ongeschikt voor kinderen omdat deze geen hekjes heeft');
        } else {
            //* validate the request
            $validated = $request->validate([
                'baan_id' => 'required|integer'
            ]);

            //* update the reservering based on the persoon id and the baan id
            DB::table('reserverings')->where('persoon_id', $persoon->id)->where('baan_id', $baan->id)->update($validated);

            //* return the view with a success message
            return redirect(route('feature_02.index', [$persoon->id, $baan->id]))->with('succes', 'Het baan nummer is gewijzigd');
        }
    }
}
