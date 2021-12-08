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
        $characters= json_decode(file_get_contents("https://dungeonsanddorks-334411-default-rtdb.europe-west1.firebasedatabase.app/getCharacters"));
        return view('/character/myCharacters')->with("characters",$characters);  
    }
    
    
    


}
