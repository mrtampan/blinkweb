<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Personil;

class PersonilController extends Controller
{
    public function index()
    {
        $personil = Personil::all();
        return view('personil', ['allData' => $personil]);
    }
    
}
