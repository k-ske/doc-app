@extends('layouts.mypage')
@section('title', 'ユーザートップページ')

@section('content')
  <link rel="stylesheet" href="/css/sport/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="sport-file">
        <h3 class="profile">スポーツ活動歴</h3>
        <div class="sport-show">
          @foreach ($sports as $sport)
            <div class="es">
              <p class="tag">小学生：{{ $sport->es_sport }}</p>
              <p class="detail">詳細：{{ $sport->es_comment }}</p>
            </div>
            <div class="jhs">
              <p class="tag">中学生：{{ $sport->jhs_sport }}</p>
              <p class="detail">詳細：{{ $sport->jhs_comment }}</p>
            </div>
            <div class="hs">
              <p class="tag">高校生：{{ $sport->hs_sport }}</p>
              <p class="detail">詳細：{{ $sport->hs_comment }}</p>
            </div>  
            <div class="co">
              <p class="tag">大学生：{{ $sport->co_sport }}</p>
              <p class="detail">詳細：{{ $sport->co_comment }}</p>
            </div>
          @endforeach 
        </div>
        <div class="btn">
          @if($sports->count() <= 0)
            <div class="btn-create">
              <a class="btn-create" href="{{ action('App\Http\Controllers\SportController@create') }}">登録ページへ</a>
            </div>
          @else
            <div class="btn-edit">
              <a class="btn-edit" href="{{ route('sport.edit', $sport->id)}}">編集する</a>
            </div> 
          @endif  
        </div>
      </div>
    </div> 
  </div>

  
@endsection