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
        $email = Auth::user()->email;
        error_log("hier");
        //$name=$request->name;
        //error_log($spells->results);
        error_log("hoer");
        $characters= json_decode(file_get_contents("http://127.0.0.1:5000/api/getMyCharacters/" . $email));
        error_log(json_encode($characters));
        return view('/character/myCharacters')->with("characters",$characters);  

    }
    
    /*
    * Haalt de inhoud van een character op
    */
    public function showCharacter($name){
        $email = Auth::user()->email;
        $name20 =rawurlencode($name);
        $character= json_decode(file_get_contents("http://127.0.0.1:5000/api/getCharacter/" . $name20 ."/" . $email));
        //$jsonChar = json_decode($character);
        error_log(json_encode($character));
        return view("character/showMyCharacter")->with("character",$character);  
    }
    


}
