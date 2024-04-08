<?php

use App\Http\Controllers\Feature_01_Controller;
use App\Http\Controllers\Feature_02_Controller;
use App\Models\Persoon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $personen = Persoon::all();
    return view('welcome', compact('personen'));
});

Route::get('feature_01/index/{persoon}', [Feature_01_Controller::class, 'index'])->name('feature_01.index');

Route::post('feature_01/index/selected/{persoon}', [Feature_01_Controller::class, 'selectedIndex'])->name('feature_01.selectedIndex');


Route::get('feature_02/index/{persoon}', [Feature_02_Controller::class, 'index'])->name('feature_02.index');

Route::get('feature_02/edit/{persoon}/{baan}', [Feature_02_Controller::class, 'edit'])->name('feature_02.edit');

Route::put('feature_02/update/{persoon}/{baan}', [Feature_02_Controller::class, 'update'])->name('feature_02.update');
