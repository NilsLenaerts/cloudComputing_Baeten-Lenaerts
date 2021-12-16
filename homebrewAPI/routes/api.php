<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homebrewController; 

//header('Access-Control-Allow-Origin: *');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/savespell', [homebrewController::class, 'saveSpell']);
Route::get('/searchspell', [homebrewController::class, 'searchSpells']);
Route::get('/showHomebrewSpell/{name}', [homebrewController::class, 'showHomebrewSpell']);
Route::post('/deletespell', [homebrewController::class, 'deleteSpell']);
Route::post('/updatespell/', [homebrewController::class, 'updateSpell']);

Route::post('/saveitem', [homebrewController::class, 'saveItem']);
Route::get('/searchitem', [homebrewController::class, 'searchItems']);
Route::get('/showHomebrewItem/{name}', [homebrewController::class, 'showHomebrewItem']);
Route::post('/deleteitem', [homebrewController::class, 'deleteItem']);