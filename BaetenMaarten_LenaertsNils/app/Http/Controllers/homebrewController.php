<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
header('Access-Control-Allow-Origin: *');
use Illuminate\Http\Request;

class homebrewController extends Controller{
    
    public function homebrew(){
        return view("homebrew/homebrew");
    }
    
    public function homebrewSpellCreator(){
        return view("homebrew/homebrewspellcreator");
    }
    
    /*
     public function foundHomebrewSpells(){
        return view("homebrew/foundhomebrewspells");
    }*/
    
    public function foundHomebrewSpells(Request $request){
        //$level=$request->level;
        error_log("hier");
        $name=$request->name;
        //error_log($spells->results);
        error_log("hoer");
        if($name!=null){
            
            $homebrewSpells= json_decode(file_get_contents("http://127.0.0.1:1200/api/searchspell/" . "?name=" . $name));
            return view("homebrew/foundHomebrewSpells")->with("homebrewSpells",$homebrewSpells);  
           
        }else{
            $homebrewSpells= json_decode(file_get_contents("http://127.0.0.1:1200/api/searchspell"));
            return view("homebrew/foundHomebrewSpells")->with("homebrewSpells",$homebrewSpells);  
        }
        
    }
    
    /*
    * Haalt de inhoud van een spell op
    */
    public function showHomebrewSpell($name){
        $homebrewSpell= json_decode(file_get_contents("http://127.0.0.1:1200/searchspell/" . $name));
        //error_log(json_encode($spell));
        return view("homebrew/showHomebrewSpell")->with("homebrewSpell",$homebrewSpell);  
    }

  
    
}
