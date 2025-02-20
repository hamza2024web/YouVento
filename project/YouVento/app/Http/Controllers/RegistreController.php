<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegistreController extends Controller
{
    public function index (){
        return view('registre');
    }
    public function store(Request $request){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        $formFields = $request->validate([
            'username' => 'required',
            'email' => 'required | email | unique:profiles',
            'password' => 'required | confirmed',
            'role' => 'required'
        ]);
        $formFields['password'] = Hash::make($password);
        Profile::create($formFields);

        return redirect('login');
    }
}
