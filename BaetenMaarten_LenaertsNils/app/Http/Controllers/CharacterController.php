<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller{ 
    /*
     * Gets the character according to e specific e-mail adress.
     * @return list of characters
     */
    public function getMyCharacters(){
        $email = Auth::user()->email;
        error_log("hier");
        //$name=$request->name;
        //error_log($spells->results);
        error_log("hoer");
        $characters= json_decode(file_get_contents("http://127.0.0.1:5000/api/getMyCharacters/" . $email));
        //error_log(json_encode($characters));
        return view('/character/myCharacters')->with("characters",$characters);  

    }
    
    /*
    * Gets the content of a specific character 
     * along with the  race and class abbilities from the DnD 5th api
     * @param the name, race and class of the character
     * @return the character, the race, the features of the class, the list of all the spells
    */
    public function showCharacter($name,$race,$classe){
        $email = Auth::user()->email;
        $name20 =rawurlencode($name);
        $racel=strtolower($race);
        $race20=rawurlencode($racel);
        
        $classel=strtolower($classe);
        $classe20=rawurlencode($classel);
        
        $spells= json_decode(file_get_contents("https://www.dnd5eapi.co/api/spells"));
        error_log(json_encode($spells));
        $character= json_decode(file_get_contents("http://127.0.0.1:5000/api/getCharacter/" . $name20 ."/" . $email));
        $races= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/" . $race20));
        $classes = json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/" . $classe20));
        $classlevels= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/". $classe20 . "/levels"));
        //$jsonChar = json_decode($character);
        //error_log(json_encode($classlevels));
        return view("character/showMyCharacter")->with("character",$character)
                                                ->with("race",$races)
                                                ->with("classe",$classes)
                                                ->with("classlevelfeatures",$classlevels)
                                                ->with("spells",$spells->results);
    }
}

