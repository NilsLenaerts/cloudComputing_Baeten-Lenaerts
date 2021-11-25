<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    //
    
    public function rules(){
        return view("rules/rules");
    }
    
    public function spells(){
        return view("rules/spells");
    }
    
    public function foundSpells(Request $request){
        $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/"));
        //error_log($spells->results);
        return view("rules/foundSpells")->with("spells",$spells->results);  
    }
    
    public function showSpell($name){
        $spell= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/" . $name));
        //error_log($spells->results);
        return view("rules/foundSpells")->with("spell",$spell->results);  
    }
}
