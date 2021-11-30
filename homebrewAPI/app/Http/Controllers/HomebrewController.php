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
            'castingTime' => $request->castingTime, 
            'level' => $request->level
            ]);
        echo("spell saved");
        //error_log($spells->results);
    }
    
    public function searchSpells(){
        $homebrewSpells= DB::table('spells')->get();
        return json_encode($homebrewSpells);
        //return $homebrewSpells;
        //echo("spells retrieved");
        //error_log($spells->results);
    }
    
    public function showHomebrewSpell($name){
        $homebrewSpell= DB::table('spells')->where('name','=',$name)->first();
        error_log(json_encode($homebrewSpell));
        echo(json_encode($homebrewSpell));
    }
}
