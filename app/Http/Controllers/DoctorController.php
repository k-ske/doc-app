<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index(){
        return view('doctor.index');
    }
}
