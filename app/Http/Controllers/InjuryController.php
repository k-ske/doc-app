<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjuryController extends Controller
{
    public function index(){
        $injuries = Injury::all();

        return view('injury.index');
    }
}
