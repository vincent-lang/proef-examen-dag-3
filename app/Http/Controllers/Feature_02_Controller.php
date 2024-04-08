<?php

namespace App\Http\Controllers;

use App\Models\Baan;
use App\Models\Persoon;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Feature_02_Controller extends Controller
{
    public function index(Persoon $persoon)
    {
        $reserveringen = Reservering::where('persoon_id', $persoon->id)->with('Baan')->get();
        return view('feature_02.index', compact('reserveringen', 'persoon'));
    }

    public function edit(Persoon $persoon, Baan $baan)
    {
        $banen = Baan::all();
        return view('feature_02.edit', compact('persoon', 'banen', 'baan'));
    }

    public function update(Request $request, Persoon $persoon, Baan $baan)
    {
        $controle = Baan::where('id', $request->baan_id)->get();
        if ($controle[0]->HeeftHek == 0) {
            return redirect(route('feature_02.edit', [$persoon->id, $baan->id]))->with('error', 'Deze baan is ongeschikt voor kinderen omdat deze geen hekjes heeft');
        } else {
            $validated = $request->validate([
                'baan_id' => 'required|integer'
            ]);

            DB::table('reserverings')->where('persoon_id', $persoon->id)->where('baan_id', $baan->id)->update($validated);

            return redirect(route('feature_02.index', [$persoon->id, $baan->id]))->with('succes', 'Het baan nummer is gewijzigd');
        }
    }
}
