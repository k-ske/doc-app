@extends('layouts.common')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/article/show.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="article-list">
        <h3 class="top-bar">記事詳細</h3>          
          <div class="article-title">
            <p>タイトル：<u>{{ $article->title }}</u></p>
          </div>
          <div class="date">
            <p>{{ $article->created_at->format('Y.m.d') }}</p>
          </div>
          <hr class="line">
          <div class="content">
            <p>{!! nl2br(e($article->content)) !!}</p>    
          </div>            
      </div>
    </div> 
  </div>

  
@endsection