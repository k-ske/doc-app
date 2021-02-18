@extends('layouts.doc-mypage')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/article/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="article-list">
        <h3 class="top-bar">オンライン診断一覧</h3>
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
          @foreach ($evaluations as $evaluation)
            <tr>
              <td class="article">{{ $evaluation->created_at->format('Y.m.d') }}</td>
              <td class="article">{{ $evaluation->injury_name }}</td>
              <td class="article">{!! nl2br(e(Str::limit($evaluation->comments, 10))) !!}</td>
              @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>

  
@endsection