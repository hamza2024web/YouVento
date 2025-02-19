<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $values = ['email' => $email , 'password' => $password];
        if (Auth::attempt($values)){
            $request->session()->regenerate();
            return redirect('home')->with('success','Vous etes bien connecté '.$email." .");
        } else {
            return back()->withErrors([
                'email' => 'email ou mot de passe incorrect.'
            ]);
        }

    }
}
