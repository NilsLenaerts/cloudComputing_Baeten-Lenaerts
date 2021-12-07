<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RulesController extends Controller{
    //
    
    public function rules(){
        $rules= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/" ));
        return view("rules/rules")->with("rules",$rules->results);  
    }
    
    public function adventuring(){
        $subSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/adventuring/")); // time, movement, the envirement, ...
        //error_log(json_encode($subSections->subsections));
        return view("rules/adventuring/adventuring")->with("subSections",$subSections->subsections);
    }

    public function appendix(){
        $subSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/appendix/")); // time, movement, the envirement, ...
        //error_log(json_encode($subSections->subsections));
        return view("rules/appendix/appendix")->with("subSections",$subSections->subsections);
    }
    
    public function combat(){
        $subSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/combat/")); // time, movement, the envirement, ...
        //error_log(json_encode($subSections->subsections));
        return view("rules/combat/combat")->with("subSections",$subSections->subsections);
    }
    
    public function ruleInfo(Request $request){
        $uri = $request->route()->getName();
        error_log($uri);
        $subSections= json_decode(file_get_contents("https://www.dnd5eapi.co/api/rules/". $uri . "/")); // time, movement, the envirement, ...
        return view("rules/". $uri . "/" . $uri)->with("subSections",$subSections->subsections);
    }
    //------------------------------------------------------------------------------------------
    
    
    
    
    
}
