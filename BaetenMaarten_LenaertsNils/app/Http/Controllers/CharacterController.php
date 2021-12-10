<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    //
    public function home(){
        $name = "guest";
        try{
            if(Auth::user()){
                $name = Auth::user()->name;
            }
            
        } catch (Exception $e) {
                dd($e->getMessage());
        }

            
        return view("home")->with("name", $name);
    }
    
  
    public function getMyCharacters(){
        error_log("hier");
        //$name=$request->name;
        //error_log($spells->results);
        error_log("hoer");
        $characters= json_decode(file_get_contents("http://127.0.0.1:5000/api/characters"));
        error_log(json_encode($characters));
        return view('/character/myCharacters')->with("characters",$characters);  
    }
    
    /*
    * Haalt de inhoud van een character op
    */
    public function showCharacter($name){
        $name20 =rawurlencode($name);
        $character= json_decode(file_get_contents("http://127.0.0.1:5000/api/getCharacter/" . $name));
        //$jsonChar = json_decode($character);
        error_log(json_encode($character));
        return view("character/showMyCharacter")->with("character",$character);  
    }
    
    /*
    public function getMyCharacters($userId){
        $characters= json_decode(file_get_contents("http://127.0.0.1:5000/api/characters/" . $userId));
        error_log(json_encode($characters));
        return view('/character/myCharacters')->with("characters",$characters);  
    }
    */

    /*
    public function showCharacter(){
        return view('/character/showMyCharacter');
    }
*/

}
