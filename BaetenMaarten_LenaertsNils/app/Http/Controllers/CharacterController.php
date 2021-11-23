<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //
    
    public function test(){
        return view("Characters.index");
    }
}
