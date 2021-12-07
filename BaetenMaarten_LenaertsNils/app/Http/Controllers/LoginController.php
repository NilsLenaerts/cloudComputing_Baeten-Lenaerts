<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use app\Http\Controllers\LoginController;
//Use Illuminate\Foundation\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class LoginController extends Controller{
    /**
    * Redirect the user to the Google authentication page.
    *
    * @return \Illuminate\Http\Response
    */
    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }
    
    
     /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {try {
  
        $user = Socialite::driver('google')->user();
        //print_r($user); die;
        $finduser = User::where('google_id', $user->getId())->first();
        if($finduser){
            Auth::login($finduser);
            return redirect('/home');
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->getId(),
                'password' => encrypt('1092345abcd')
            ]);

            Auth::login($newUser);
            return redirect('/home');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}

}