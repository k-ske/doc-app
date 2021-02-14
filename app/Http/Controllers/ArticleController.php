<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->doctor_id = $request->user()->id;
        $article->save();

        return redirect() -> route('doctor.index');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id){
        $article = Article::find($id);
        $article->fill($request->all())->save();
        return redirect() -> route('doctor.index');
    }
}

