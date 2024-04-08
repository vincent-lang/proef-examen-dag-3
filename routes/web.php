<?php

use App\Http\Controllers\Feature_01_Controller;
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
})->name('welcome');

Route::get('feature_01/index/{persoon}', [Feature_01_Controller::class, 'index'])->name('feature_01.index');

Route::post('feature_01/index/selected/{persoon}', [Feature_01_Controller::class, 'selectedIndex'])->name('feature_01.selectedIndex');
