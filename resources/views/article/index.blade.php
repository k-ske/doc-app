@extends('layouts.mypage')
@section('title', '記事一覧')

@section('content')
  <link rel="stylesheet" href="/css/injury/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="injury-file">
        <h3 class="profile">既往歴</h3>
        <div class="injury-show">
          @foreach ($injuries as $injury)
            <div class="tag">
              <p class="injurySite">怪我した部位：{{ $injury->injury_site }}</p>
            </div>
            <div class="tag">
              <p class="whenInjured">いつ怪我したか：{{ $injury->when_injured }}</p>
            </div>
            <div class="tag">
              <p class="moi">怪我した時の状況：{{ $injury->moi }}</p>
            </div>
            <div class="tag">
              <p class="painType">痛みの種類：{{ $injury->pain_type }}</p>
            </div>
            <div class="tag">
              <p class="painfulMotion">痛みが出る動き：{{ $injury->painful_motion }}</p>
            </div>
            <div class="tag">
              <p class="howPainful">痛みの程度：{{ $injury->how_painful }}</p>
            </div>
            <div class="tag">
              <p class="comments">詳細記入欄：{{ $injury->comments }}</textarea></p>
            </div>

            <div class="btn">
              <a class="btn-create" href="{{ action('App\Http\Controllers\InjuryController@create') }}">登録ページへ</a>
            </div>
            <div class="btn">
              <a class="btn-edit" href="{{ route('injury.edit', $injury->id)}}">編集する</a>
            </div>   
          @endforeach
      </div>
    </div> 
  </div>

  
@endsection