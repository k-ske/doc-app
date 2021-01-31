@extends('layouts.mypage')
@section('title', 'ユーザートップページ')

@section('content')
  <link rel="stylesheet" href="/css/sport/edit.css">
  
  <div class="main-wrap">
    <div class="main-page">
      <div class="sport-file">
        <h3 class="profile">スポーツ活動歴</h3>
        <div class="sport-show">
        <form action="{{ route('sport.update' ,$sport->id) }} " method="POST">
        @csrf
        @method('PUT')
            <div class="subTitle">各年代において取り組んだスポーツ</div>
              <div class="es">
                <p class="tag">小学生：<input type="text" name="es_sport" value="{{ old('es_sport', $sport->es_sport) }}"></p>
                <p class="detail">詳細記入欄：<textarea name="es_comment" placeholder="ポジションなど" value="{{ old('es_comment, $sport->es_comment') }}"></textarea></p>
              </div>
              <div class="jhs">
                <p class="tag">中学生：<input type="text" name="jhs_sport" value="{{ old('jhs_sport', $sport->jhs_sport) }}"></p>
                <p class="detail">詳細記入欄：<textarea name="jhs_comment" placeholder="ポジションなど" value="{{ old('jhs_comment', $sport->jhs_comment) }}"></textarea></p>
              </div>
              <div class="hs">
                <p class="tag">高校生：<input type="text" name="hs_sport" value="{{ old('hs_sport', $sport->hs_sport) }}"></p>
                <p class="detail">詳細記入欄：<textarea name="hs_comment" placeholder="ポジションなど" value="{{ old('hs_comment', $sport->hs_comment) }}"></textarea></p>
              </div>
              <div class="co">
                <p class="tag">大学生：<input type="text" name="co_sport" value="{{ old('co_sport', $sport->co_sport) }}"></p>
                <p class="detail">詳細記入欄：<textarea name="co_comment" placeholder="ポジションなど" value="{{ old('co_comment', $sport->co_comment) }}"></textarea></p>
              </div>
              <div class="btn-wrap">
                <input class="btn" type="submit" value="変更する">
              </div>
           </form>
        </div>
      </div>
    </div>
  </div>
@endsection
