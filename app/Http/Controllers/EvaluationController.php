<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EvaluationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Evaluation;
use App\Models\Injury;
use App\Models\Doctor;


class EvaluationController extends Controller
{
    public function index(){
        $doctor_id = Auth::id();
        $evaluations = Evaluation::where('doctor_id', $doctor_id)->get();
        return view('evaluation.index', ["evaluations" => $evaluations]);
    }

    public function create(){
        $q = \Request::query();
        return view('evaluation.create', [
            'injury_id' => $q['injury_id']
        ]);
    }

    public function store(EvaluationRequest $request){
        $evaluation = new Evaluation;
        $input = $request->only($evaluation->getFillable());
        $evaluation = $evaluation->create($input);  
        return redirect('/doctor/top');
    }
}
