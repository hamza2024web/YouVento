<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        $clubs = Club::all();
        return view('clubs',compact('clubs'));
    }

    public function storeClub(Request $request){
        $clubFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
            'categorie' => 'required'
        ]);
        
        Club::create($clubFields);
        return redirect('dashboard');
    }
}
