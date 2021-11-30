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
    
    public function searchSpells(){
       
        $homebrewSpells= DB::table('spells')->get();
        echo(json_encode($homebrewSpells));
        //return $homebrewSpells;
        //echo("spells retrieved");
        //error_log($spells->results);
    }
}
