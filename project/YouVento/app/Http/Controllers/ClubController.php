<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function storeClub(Request $request){
        $clubFields = $request->validate([
            ''
        ])
    }
}
