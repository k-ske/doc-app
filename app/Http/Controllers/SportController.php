<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sport;

class SportController extends Controller
{
    public function index(){
        $sports = Sport::all();
        return view('sport.index', ["sports" => $sports]);
    }

    public function create(){
        return view('sport.create');
    }

    public function store(Request $request){
        $sport = new Sport;
        $sport->fill($request->all())->save();
        return redirect() -> route('sport.index');
    }

    public function edit($id){
        $sport = Sport::find($id);
        return view('sport.edit', compact('sport'));
    }

    public function update(Request $request, $id){
        $sport = Sport::find($id);
        $sport->fill($request->all())->save();
        return redirect() -> route('sport.index');

    }
}
