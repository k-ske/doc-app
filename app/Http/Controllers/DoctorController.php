<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index(){
        return view('doctor.index');
    }
}
