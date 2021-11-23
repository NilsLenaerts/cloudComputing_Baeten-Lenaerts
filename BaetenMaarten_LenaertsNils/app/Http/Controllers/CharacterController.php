<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //
    
    public function home(){
        return view("home");
    }
    
    public function RCC(){
        return view("Characters\character");
    }
}
