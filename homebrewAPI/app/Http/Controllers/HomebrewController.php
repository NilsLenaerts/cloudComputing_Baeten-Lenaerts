<?php

namespace App\Http\Controllers;
//header('Access-Control-Allow-Origin: http://127.0.0.1:8000');
//header('Access-Control-Allow-Origin: *');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spell;

class homebrewController extends Controller
{
    
    public function saveSpell(Request $request){
        error_log("we zitten hier");
        DB::table('spells')->insert([
            'name' => $request->name,
            'castingTime' => $request->castingTime, 
            'level' => $request->level,
            'components' => $request->components,
            'materials' => $request->materials, 
            'description' => $request->description,
            'school' => $request->school,
            'range' => $request->range, 
            'ritual' => $request->ritual,
            'availability' => $request->availability
            ]);
        echo("spell saved");
        error_log($spells->results);
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
    
    
    public function deleteSpell($name){  
        $deletedSpell = DB::table('spells')->delete->where('name','=',$name)->first();
        error_log(json_encode($deletedSpell));
        echo(json_encode($deletedSpell));
    }
    
    public function updateSpell(Request $request){  
        $updatedSpell = DB::table('spells')->update->where('name','=',$name)->first();
        error_log(json_encode($updatedSpell));
        echo(json_encode($updatedSpell));
    }
    
    
    //-------------------------------------------------------------------------
    public function saveItem(Request $request){
        error_log("we zitten hier");
        DB::table('items')->insert([
            'name' => $request->name,
            'price' => $request->price, 
            'description' => $request->description
            ]);
        echo("item saved");
        //error_log($spells->results);
    }
    
    public function searchItems(){
        $homebrewItems= DB::table('items')->get();
        if($homebrewItems!=null){
            return json_encode($homebrewItems);
        }
        //return $homebrewSpells;
        //echo("spells retrieved");
        //error_log($spells->results);
    }
    
    public function showHomebrewItem($name){
        error_log(" EENTJE");
        $homebrewItem= DB::table('items')->where('name','=',$name)->first();
        error_log(json_encode($homebrewItem));
        error_log("TWEETJE");
        echo(json_encode($homebrewItem));
        error_log("DRIETJE");
    }
}
