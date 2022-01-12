<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RulesController extends Controller{
     
    /*
     * Gets the view ot the rules page
     * @return rules view
     */
    public function rules(){
        return view("rules/rules");
    }

    /*
     * Gets all the rules according to the params
     * @param request
     * @return sections view, subsection, sections
     */
    public function ruleInfo(Request $request){
        $uri = $request->route()->uri;
        //$route =json_encode($uri);
        //error_log(json_encode($uri));       
        //$viewUrl = "rules/".$uri."/".$uri;
        $fileUrl = "https://www.dnd5eapi.co/api/rules/".$uri."/";   
        $subSections= json_decode(file_get_contents($fileUrl)); // time, movement, the envirement, ...
        return view("rules/sections")->with("subSections",$subSections->subsections)->with("sections",$uri);
    }

    
    
    
    
    
}
