<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller{
    //
    
    public function rules(){
        $rules= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/" ));
        return view("rules/rules")->with("rules",$rules->results);  
    }
    
    public function adventuring(){
        $subSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/adventuring/")); // time, movement, the envirement, ...
        $ruleSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rule-sections/")); //bijv time, poisons,...
        //error_log(json_encode($subSections->subsections));
        error_log(json_encode($ruleSections->results));
        return view("rules/adventuring/adventuring")->with("subSections",$subSections->subsections)
                                                    ->with("ruleSections",$ruleSections->results);
    }

    public function showDescription($name){
        $ruleke= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rule-sections/" . $name));
        return view("rules/adventuring/adventuring")->with("ruleke",$ruleke);  
    }
    
    
    //------------------------------------------------------------------------------------------
    
    
    
    
    
}
