<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RealmController;   
use App\Http\Controllers\RulesController;    
use App\Http\Controllers\homebrewController;  
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Realm
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


// homebrew content
Route::get('/homebrew', [homebrewController::class, 'homebrew']);
Route::get('/foundHomebrewSpells', [homebrewController::class, 'foundHomebrewSpells']);
Route::get('/showHomebrewSpell/{name}', [homebrewController::class, 'showHomebrewSpell']);

Route::get('/foundHomebrewItems', [homebrewController::class, 'foundHomebrewItems']);
Route::get('/showHomebrewItem/{name}', [homebrewController::class, 'showHomebrewItem']);


// Rules
Route::get('/rules', [RulesController::class, 'rules']);
Route::get('/adventuring', [RulesController::class, 'ruleInfo']);
Route::get('/appendix', [RulesController::class, 'ruleInfo']);
Route::get('/combat', [RulesController::class, 'ruleInfo']);
Route::get('/equipment', [RulesController::class, 'ruleInfo']);
Route::get('/spellcasting', [RulesController::class, 'ruleInfo']);
Route::get('/using-ability-scores', [RulesController::class, 'ruleInfo']);

Route::get('/calendar', [CalendarController::class, 'calendarInfo']);
Route::post('/event', [CalendarController::class, 'eventInfo']);



// Home
Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Github login
Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']);


// Characters
Route::get('/myCharacters', [CharacterController::class, 'getMyCharacters']);
Route::get('/showMyCharacter/{name}/{race}/{classe}', [CharacterController::class, 'showCharacter']);

