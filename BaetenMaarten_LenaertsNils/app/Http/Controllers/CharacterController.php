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
        //error_log(json_encode($characters));
        return view('/character/myCharacters')->with("characters",$characters);  

    }
    
    /*
    * Haalt de inhoud van een character op
    */
    public function showCharacter($name,$race,$classe){
        $email = Auth::user()->email;
        $name20 =rawurlencode($name);
        $racel=strtolower($race);
        $race20=rawurlencode($racel);
        
        $classel=strtolower($classe);
        $classe20=rawurlencode($classel);
        
        $character= json_decode(file_get_contents("http://127.0.0.1:5000/api/getCharacter/" . $name20 ."/" . $email));
        $races= json_decode(file_get_contents("https://www.dnd5eapi.co/api/races/" . $race20));
        $classes = json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/" . $classe20));
        $classlevels= json_decode(file_get_contents("https://www.dnd5eapi.co/api/classes/". $classe20 . "/levels"));
        //$jsonChar = json_decode($character);
        //error_log(json_encode($classlevels));
        return view("character/showMyCharacter")->with("character",$character)
                                                ->with("race",$races)
                                                ->with("classe",$classes)
                                                ->with("classlevelfeatures",$classlevels);
    }
    

}

/*
 * 
                                        @if(isset($classlevel->class_specific))
                                            @foreach($classlevel->class_specific as $key=>$value)
                                            <li>{{$key}}: {{$value}}</li>
                                            @endforeach
                                        @endif
 */