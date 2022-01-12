<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $name = "guest";
        try{
            if(Auth::user()){
                $name = Auth::user()->name;
            }
            
        } catch (Exception $e) {
                dd($e->getMessage());
        }
        return view('home')->with('name', $name);
    }

}
