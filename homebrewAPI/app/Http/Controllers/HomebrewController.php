<?php

namespace App\Http\Controllers;
header('Access-Control-Allow-Origin: *');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spell;

class homebrewController extends Controller
{
    
    
    public function saveSpell(Request $request){
        DB::table('spells')->insert([
            'name' => $request->name,
            'casting time' => $request->castingTime, 
            'level' => $request->level
            ]);
        echo("spell saved");
        //error_log($spells->results);
    }
    
    public function searchSpells(Request $request){
        $homebrewSpells= DB::table('spells')->where('level',"==",$request->level);
        return  $homebrewSpells;
        //echo("spells retrieved");
        //error_log($spells->results);
    }
}
