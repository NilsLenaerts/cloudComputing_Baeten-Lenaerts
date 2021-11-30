<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homebrewController;     
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/savespell', [homebrewController::class, 'saveSpell']);
Route::post('/searchspell', [homebrewController::class, 'searchSpell']);
Route::post('/showHomebrewSpell/{name}', [homebrewController::class, 'showHomebrewSpell']);