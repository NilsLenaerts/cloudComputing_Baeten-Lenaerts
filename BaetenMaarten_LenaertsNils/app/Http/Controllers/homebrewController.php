<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homebrewController extends Controller{
    
    public function homebrew(){
        return view("homebrew/homebrew");
    }
    
    /*
     * Gets the homebrew spell from our homebrew api
     * @param request
     * @return foundhomebrewspells view, homebrew spells
     */
    public function foundHomebrewSpells(Request $request){
        //$level=$request->level;
        error_log("hier");
        //$name=$request->name;
        //error_log($spells->results);
        error_log("hoer");
        $homebrewSpells= json_decode(file_get_contents("http://127.0.0.1:1200/api/searchspell"));
        return view("homebrew/foundHomebrewSpells")->with("homebrewSpells",$homebrewSpells);    
    }
    
    /*
     * Gets the homebrew spell accroding to the params
     * @param name
     * @return showhomebrewspell view, homebrewspell
     */
    public function showHomebrewSpell($name){
        $name20 =rawurlencode($name);
        $homebrewSpell= json_decode(file_get_contents("http://127.0.0.1:1200/api/showHomebrewSpell/" . $name20));
        error_log(json_encode($homebrewSpell));
        return view("homebrew/showHomebrewSpell")->with("homebrewSpell",$homebrewSpell);  
    }

    /*
     * Gets the homebrew items from our homebrew api
     * @param request
     * @return foundhomebrewitems view, homebrew items
     */
    public function foundHomebrewItems(Request $request){
        //$level=$request->level;
        error_log("hier");
        //$name=$request->name;
        //error_log($homebrewItems->results);
        error_log("hoer");
        $homebrewItems= json_decode(file_get_contents("http://127.0.0.1:1200/api/searchitem"));
        return view("homebrew/foundHomebrewItems")->with("homebrewItems",$homebrewItems);          
    }
    
    /*
     * Gets the homebrew item accroding to the params
     * @param name
     * @return showhomebrewitem view, homebrew item
     */
    public function showHomebrewItem($name){
        $name20 =rawurlencode($name);
        $homebrewItem= json_decode(file_get_contents("http://127.0.0.1:1200/api/showHomebrewItem/" . $name20));
        error_log(json_encode($homebrewItem));
        return view("homebrew/showHomebrewItem")->with("homebrewItem",$homebrewItem);  
    }
    
}
