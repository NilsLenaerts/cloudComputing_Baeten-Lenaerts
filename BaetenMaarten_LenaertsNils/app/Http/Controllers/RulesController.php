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
    /*
    public function classes(){
        return view("rules/classes");
    }*/
    
    /* zonder level filter
    public function foundSpells(Request $request){
        $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/"));
        //error_log($spells->results);
        return view("rules/foundSpells")->with("spells",$spells->results);  
    }*/
    
    /*
     * @Param request
     * Zoekt spells op de D&D 5e API, eventueel op level, en geeft deze terug
     */
    public function foundSpells(Request $request){
        $level=$request->level;
        //error_log($spells->results);
        if($level!=null){
            if($level>9){
                echo("No spell of level 9 or higher exists in this world");
            }elseif($level>0){
                $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells" . "?level=" . $level));
                return view("rules/foundSpells")->with("spells",$spells->results);  
            }else{
                echo("wrong input");
            }
        }else{
            $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/"));
            return view("rules/foundSpells")->with("spells",$spells->results);  
        }
        
    }
    
    /*
     * Haalt de classes op van de D&D5e api en geeft deze terug
     */
    public function foundClasses(Request $request){
        $classes= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/"));
        error_log($classes>results);
        return view("rules/foundClasses")->with("classes",$classes->results);  
    }
    
    /*
     * Haalt de inhoud van een spell op
     */
    public function showSpell($name){
        $spell= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/" . $name));
        //error_log(json_encode($spell));
        return view("rules/showSpell")->with("spell",$spell);  
    }
    
    
    /*
     * haalt de inhoud van een klasse op
     */
    public function showclass($name){
        $class= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/" . $name));
        error_log(json_encode($class->proficiency_choices[0]->from));
        return view("rules/showClass")->with("class",$class);  
    }

    //------------------------------------------------------------------------------------------
    
    
    
}
