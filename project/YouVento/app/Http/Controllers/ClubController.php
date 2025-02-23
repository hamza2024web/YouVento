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
    public function editClub(Club $club){
        return view('editClub',compact('club'));
    }
    public function update(Club $club , Request $request){
        $clubFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
            'categorie' => 'required'   
        ]);
        $club->fill($clubFields)->save();
        return redirect('clubs')->with('success','Le Club a été bien Modifié');
    }
    public function deleteClub(Club $club){
        $club->delete();
        return redirect('clubs')->with('success','Le Club a été bien supprimé');
    }
}
