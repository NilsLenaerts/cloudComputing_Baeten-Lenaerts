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
                return view("rules/spells/spells")->with("spells",$spells->results);  
            }else{
                echo("wrong input");
            }
        }else{
            $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/"));
            return view("rules/spells/spells")->with("spells",$spells->results);  
        }
        
    }
    
    /*
     * Haalt de classes op van de D&D5e api en geeft deze terug
     */
    public function foundClasses(Request $request){
        $classes= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/"));
        error_log(json_encode($classes->results));
        return view("rules/classes/foundClasses")->with("classes",$classes->results);  
    }
    
    /*
     * Haalt de Races op van de D&D5e api en geeft deze terug
     */
    public function foundRaces(Request $request){
        $races= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/"));
        error_log(json_encode($races->results));
        return view("rules/races/foundRaces")->with("races",$races->results);  
    }
    
    
    /*
    * Haalt de classes op van de D&D5e api en geeft deze terug
    */
    public function foundMonsters(Request $request){
        $monsters= json_decode(file_get_contents("https://www.dnd5eapi.co/api/monsters/"));
        return view("rules/monsters/foundMonsters")->with("monsters",$monsters->results);  
    }
    
    /*
     * Haalt de inhoud van een spell op
     */
    public function showSpell($name){
        $spell= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/" . $name));
        //error_log(json_encode($spell));
        return view("rules/spells/showSpell")->with("spell",$spell);  
    }
    
    
    /*
     * haalt de inhoud van een klasse op
     */
    public function showClass($name){
        $class= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/" . $name));
        return view("rules/classes/showClass")->with("class",$class);  
    }

    /*
     * haalt de inhoud van een klasse op
     */
    public function showRace($name){
        $race= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/" . $name));
        return view("rules/races/showRace")->with("race",$race);  
    }

    /*
     * haalt de inhoud van een klasse op
     */
    public function showTrait($name){
        $trait= json_decode(file_get_contents("https://www.dnd5eapi.co/api/traits/" . $name));
        return view("rules/showTrait")->with("trait",$trait);  
    }
    
    /*
     * haalt de inhoud van een klasse op
     */
    public function showSubrace($name){
        $subrace= json_decode(file_get_contents("https://www.dnd5eapi.co/api/subraces/" . $name));
        return view("rules/races/showSubrace")->with("subrace",$subrace);  
    }
    
    /*
     * haalt de inhoud van een klasse op
     */
    public function showSubclass($name){
        $subclass= json_decode(file_get_contents("https://www.dnd5eapi.co/api/subclasses/" . $name));
        return view("rules/classes/showSubclass")->with("subclass",$subclass);  
    }
    
    
    /*
    * haalt de inhoud van een klasse op
    */
    public function showMonster($name){
        $monster= json_decode(file_get_contents("https://www.dnd5eapi.co/api/monsters/" . $name));
        return view("rules/monsters/showMonster")->with("monster",$monster);  
    }
    

   
    //------------------------------------------------------------------------------------------
    
    
    
}
