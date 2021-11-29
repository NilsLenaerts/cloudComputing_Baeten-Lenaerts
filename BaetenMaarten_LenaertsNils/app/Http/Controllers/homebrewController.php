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
    

  
    
}
