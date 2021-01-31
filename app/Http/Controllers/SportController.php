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
        $sport->es_sport = $request->es_sport;
        $sport->es_comment = $request->es_comment;
        $sport->jhs_sport = $request->jhs_sport;
        $sport->jhs_comment = $request->jhs_comment;
        $sport->hs_sport = $request->hs_sport;
        $sport->hs_comment = $request->hs_comment;
        $sport->co_sport = $request->co_sport;
        $sport->co_comment = $request->co_comment;
        $sport->user_id = $request->user()->id;
        $sport->save();
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
