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

    public function ruleInfo(Request $request){
        $uri = $request->route()->uri;
        $route =json_encode($uri);
        //error_log(json_encode($uri));       
        //$viewUrl = "rules/".$uri."/".$uri;
        $fileUrl = "https://www.dnd5eapi.co/api/rules/".$uri."/";   
        $subSections= json_decode(file_get_contents($fileUrl)); // time, movement, the envirement, ...
        return view("rules/sections")->with("subSections",$subSections->subsections);
    }
    //------------------------------------------------------------------------------------------
    
    
    
    
    
}
