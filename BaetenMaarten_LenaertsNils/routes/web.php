<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RealmController;   
use App\Http\Controllers\RulesController;    
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

Route::get('/', [CharacterController::class, 'home']);

Route::get('/home', [CharacterController::class, 'home']);
Route::get('/randomCharacterCreation', [CharacterController::class, 'RCC']);

// ----- Realm
Route::get('/realm', [RealmController::class, 'realm']);
Route::get('/spells', [RealmController::class, 'foundSpells']);
Route::get('/showSpell/{name}', [RealmController::class, 'showSpell']);

Route::get('/classes', [RealmController::class, 'foundClasses']);
Route::get('/showClass/{name}', [RealmController::class, 'showClass']);
Route::get('/showSubclass/{name}', [RealmController::class, 'showSubclass']);

Route::get('/races', [RealmController::class, 'foundRaces']);
Route::get('/showRace/{name}', [RealmController::class, 'showRace']);
Route::get('/showSubrace/{name}', [RealmController::class, 'showSubrace']);

Route::get('/showTrait/{name}', [RealmController::class, 'showTrait']);

Route::get('/monsters', [RealmController::class, 'foundMonsters']);
Route::get('/showMonster/{name}', [RealmController::class, 'showMonster']);


// ------ homebrew content
Route::get('/homebrew', [homebrewController::class, 'homebrew']);
Route::get('/foundHomebrewSpells', [homebrewController::class, 'foundHomebrewSpells']);
Route::get('/showHomebrewSpell/{name}', [homebrewController::class, 'showHomebrewSpell']);

Route::get('/foundHomebrewItems', [homebrewController::class, 'foundHomebrewItems']);
Route::get('/showHomebrewItem/{name}', [homebrewController::class, 'showHomebrewItem']);


// ------ Rules
Route::get('/rules', [RulesController::class, 'rules']);
Route::get('/adventuring', [RulesController::class, 'adventuring']);
Route::get('/appendix', [RulesController::class, 'adventuring']);
Route::get('/combat', [RulesController::class, 'ruleInfo']);

Route::get('/conditions', [RulesController::class, 'foundConditions']);
Route::get('/showCondition/{name}', [RulesController::class, 'showCondition']);

