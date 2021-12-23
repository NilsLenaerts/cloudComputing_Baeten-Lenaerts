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
    
    public function deleteSpell(Request $request){
        $name = $request->name;
        error_log($name);
        $deletedSpell = DB::table('spells')->where('name','=',$name)->delete();
        error_log(json_encode($deletedSpell));
        echo(json_encode($deletedSpell));
    }
    
    public function updateSpell(Request $request){  
        $name = $request->name;
        $updatedSpell = DB::table('spells')->where('name','=',$name)->update();
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
    
    public function deleteItem(Request $request){
        $name = $request->name;
        error_log($name);
        $deletedItem = DB::table('items')->where('name','=',$name)->delete();
        error_log(json_encode($deletedItem));
        echo(json_encode($deletedItem));
    }
}

/*
 * 
 *     <form  class="margin-2" id="myCharacters" onchange="updateSpell('{{$homebrewSpell->name}}')">
        <h4>Casting Time: <input type="string" name="name" value="{{$homebrewSpell->castingTime}}" id="castingTime"/></h4>  
        <p>Spell Level: <input type="string" name="name" value="{{$homebrewSpell->level}} " id="level"/></p>
        <p>components: <input type="string" name="name" value="{{$homebrewSpell->components}} " id="components"/></p>
        <p>materials: <input type="string" name="name" value="{{$homebrewSpell->materials}} " id="materials"/></p>
        <p>description: <input type="string" name="name" value="{{$homebrewSpell->description}} " id="description"/></p>
        <p>school: <input type="string" name="name" value="{{$homebrewSpell->school}} " id="school"/></p>
        <p>range: <input type="string" name="name" value="{{$homebrewSpell->range}} " id="range"/></p>
        <p>ritual: <input type="string" name="name" value="{{$homebrewSpell->ritual}} " id="ritual"/></p>
        <p>availability: <input type="string" name="name" value="{{$homebrewSpell->availability}} " id="availability"/></p>
    </form>
 */