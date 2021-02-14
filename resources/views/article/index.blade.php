@extends('layouts.common')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/article/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="article-list">
        <h3 class="top-bar">記事一覧</h3>
        <table class="table">
          <thead>
          <tr>
              <th class="bar">作成日時</th>
              <th class="bar">タイトル</th>
              <th class="bar">内容</th>
              <th class="bar"></th>
          </tr>
          </thead>
          <tbody id="tbl">
          @foreach ($articles as $article)
            <tr>
              <td class="article">{{ $article->created_at->format('Y.m.d') }}</td>
              <td class="article">{{ $article->title }}</td>
              <td class="article">{!! nl2br(e(Str::limit($article->content, 10))) !!}</td>
              <td class="article"><a href="{{ route('article.show', $article->id) }}">READ MORE</a></td>
          @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>

  
@endsection