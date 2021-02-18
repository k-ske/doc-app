@extends('layouts.doc-toppage')
@section('title', '記事投稿')

@section('content')
  <link rel="stylesheet" href="/css/article/create.css">
  
  <div class="main-wrap">
    <div class="main-page">
      <div class="article-file">
        <h3 class="profile">記事作成ページ</h3>
        <div class="article-make">
          <form action="{{ route('doctor.article.create') }}" method="POST">
            @csrf
            <div class="article-main">
              <div class="tag">
                <input name="title" placeholder="タイトル" value="{{ old('title') }}">
              </div>
              <div class="content">
                <textarea class="content" name="content" cols="50" rows="10" value="{{ old('content') }}"></textarea>
              </div>
              <div class="btn-wrap">
                <input class="btn" type="submit" value="投稿する">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection