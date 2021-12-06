<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    //
    
    public function rules(){
        return view("rules/rules");
    }
    
    /*
     * Haalt de classes op van de D&D5e api en geeft deze terug
     */
    public function foundConditions(Request $request){
        $conditions= json_decode(file_get_contents("https://www.dnd5eapi.co/api/conditions/"));
        return view("rules/conditions")->with("conditions",$conditions->results);  
    }

    /*
     * haalt de inhoud van een klasse op
     */
    public function showCondition($name){
        $condition= json_decode(file_get_contents("https://www.dnd5eapi.co/api/conditions/" . $name));
        return view("rules/showCondition")->with("condition",$condition);  
    }

   
    //------------------------------------------------------------------------------------------
    
    
    
}
