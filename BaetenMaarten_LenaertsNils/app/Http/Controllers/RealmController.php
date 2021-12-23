<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class RealmController extends Controller
{
    
    /*
     * @return the view ot the realm page
     */
    public function realm(){
        return view("realm/realm");
    }
    
    /*
     * Searches spell by level on the DnD 5th api
     * @Param request
     * @return spells view, the searched spells
     */
    public function foundSpells(Request $request){
        $level=$request->level;
        //error_log($spells->results);
        if($level!=null){
            if($level>9){
                echo("No spell of level 9 or higher exists in this world");
            }elseif($level>0){
                $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells" . "?level=" . $level));
                return view("realm/spells/spells")->with("spells",$spells->results);  
            }else{
                echo("wrong input");
            }
        }else{
            $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/"));
            return view("realm/spells/spells")->with("spells",$spells->results);  
        }
        
    }
    
    /*
     * Gets the classes on the DnD 5th api
     * @param request
     * @return the foundclasses view, classes
     */
    public function foundClasses(Request $request){
        $classes= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/"));
        error_log(json_encode($classes->results));
        return view("realm/classes/foundClasses")->with("classes",$classes->results);  
    }
    
    /*
     * Gets the races on the DnD 5th api
     * @param request
     * @return the foundraces view, races
     */
    public function foundRaces(Request $request){
        $races= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/"));
        error_log(json_encode($races->results));
        return view("realm/races/foundRaces")->with("races",$races->results);  
    }
    
    
    /*
     * Gets the monsters on the DnD 5th api
     * @param request
     * @return the foundmonsters view, monsters
     */
    public function foundMonsters(Request $request){
        $monsters= json_decode(file_get_contents("https://www.dnd5eapi.co/api/monsters/"));
        return view("realm/monsters/foundMonsters")->with("monsters",$monsters->results);  
    }
   
    
    
    /*
     * Gets the spell on the DnD 5th api according to the params
     * @param name of the spell
     * @return the showspells view, spell
     */
    public function showSpell($name){
        $spell= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells/" . $name));
        //error_log(json_encode($spell));
        return view("realm/spells/showSpell")->with("spell",$spell);  
    }
    
    
    /*
     * Gets the class and the level features on the DnD 5th api according to the params
     * @param name of the class
     * @return the showclass view, class, classlevels
     */
    public function showClass($name){
        $class= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/" . $name));
        $classlevels= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/". $name . "/levels"));
        return view("realm/classes/showClass")->with("class",$class)
                                              ->with("classlevels",$classlevels);  
    }
    
    /*
     * Gets the race on the DnD 5th api according to the params
     * @param name of the race
     * @return the showrace view, race
     */
    public function showRace($name){
        $race= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/" . $name));
        return view("realm/races/showRace")->with("race",$race);  
    }

    /*
     * Gets the trait on the DnD 5th api according to the params
     * @param name of the trait
     * @return the showtrait view, trait
     */
    public function showTrait($name){
        $trait= json_decode(file_get_contents("https://www.dnd5eapi.co/api/traits/" . $name));
        return view("realm/showTrait")->with("trait",$trait);  
    }
    
    /*
     * Gets the subrace on the DnD 5th api according to the params
     * @param name of the subrace
     * @return {html} the showsubrace view, subrace
     */
    public function showSubrace($name){
        $subrace= json_decode(file_get_contents("https://www.dnd5eapi.co/api/subraces/" . $name));
        return view("realm/races/showSubrace")->with("subrace",$subrace);  
    }
    
    /*
     * Gets the subclass on the DnD 5th api according to the params
     * @param name of the subclass
     * @return the showsubclass view, subclass
     */
    public function showSubclass($name){
        $subclass= json_decode(file_get_contents("https://www.dnd5eapi.co/api/subclasses/" . $name));
        return view("realm/classes/showSubclass")->with("subclass",$subclass);  
    }
    
    
    /*
     * Gets the monster on the DnD 5th api according to the param
     * @param name of the monster
     * @return the showmonster view, monster
     */
    public function showMonster($name){
        $monster= json_decode(file_get_contents("https://www.dnd5eapi.co/api/monsters/" . $name));
        return view("realm/monsters/showMonster")->with("monster",$monster);  
    }
}
