<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Injury;

class InjuryController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $injuries = Injury::where('user_id', $user_id)->get();
        return view('injury.index', ["injuries" => $injuries]);
    }

    public function create(){
        return view('injury.create');
    }

    public function store(Request $request){
        $injury = new Injury;
        $injury->injury_site = $request->injury_site;
        $injury->when_injured = $request->when_injured;
        $injury->MOI = $request->MOI;
        $injury->pain_type = $request->pain_type;
        $injury->painful_motion = $request->painful_motion;
        $injury->how_painful = $request->how_painful;
        $injury->comments = $request->comments;
        $injury->user_id = $request->user()->id;
        $injury->save();
        return redirect() -> route('injury.index');
    }

    public function edit($id){
        $injury = Injury::find($id);
        return view('injury.edit', compact('injury'));
    }

    public function update(Request $request, $id){
        $injury = Injury::find($id);
        $injury->fill($request->all())->save();
        return redirect() -> route('injury.index');

    }
}
