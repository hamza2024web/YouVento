<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function etudiant(){
        return view('etudiant');
    }
}
