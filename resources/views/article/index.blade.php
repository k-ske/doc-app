@extends('layouts.common')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/article/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="injury-file">
        <h3 class="profile">記事一覧</h3>
        <table class="table">
          <thead>
          <tr>
              <th>作成日時</th>
              <th>件名</th>
              <th>メッセージ</th>
              <th></th>
          </tr>
          </thead>
          <tbody id="tbl">
          @foreach ($articles as $article)
            <tr>
              <td>{{ $article->created_at->format('Y.m.d') }}</td>
              <td>{{ $article->title }}</td>
              <td>{!! nl2br(e(Str::limit($article->content, 10))) !!}</td>
              <td><a href="{{ action('App\Http\Controllers\ArticleController@show') }}">READ MORE</a></td>
          @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>

  
@endsection