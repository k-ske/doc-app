@extends('layouts.mypage')
@section('title', 'ケガトップ')

@section('content')
  <link rel="stylesheet" href="/css/injury/edit.css">
  
  <div class="main-wrap">
    <div class="main-page">
      <div class="injury-file">
        <h3 class="profile">スポーツ活動歴</h3>
        <div class="injury-show">
        <form action="{{ route('injury.update' ,$injury->id) }} " method="POST">
        @csrf
        @method('PUT')
          <div class="subTitle">
            <div class="tag">
              <p class="injurySite">怪我した部位：<input type="text" name="injury_site" value="{{ old('injury_site', $injury->injury_site) }}"></p>
            </div>
            <div class="tag">
              <p class="whenInjured">いつ怪我したか：<input type="text" name="when_injured" value="{{ old('when_injured', $injury->when_injured) }}"></p>
            </div>
            <div class="tag">
              <p class="moi">怪我した時の状況：<input type="text" name="moi" value="{{ old('moi', $injury->moi) }}"></p>
            </div>
            <div class="tag">
              <p class="painType">痛みの種類：<input type="text" name="pain_type" value="{{ old('pain_type', $injury->pain_type) }}"></p>
            </div>
            <div class="tag">
              <p class="painfulMotion">痛みが出る動き：<input type="text" name="painful_motion" value="{{ old('painful_motion', $injury->painful_motion) }}"></p>
            </div>
            <div class="tag">
              <p class="howPainful">痛みの程度：<input type="text" name="how_painful" value="{{ old('how_painful', $injury->how_painful) }}"></p>
            </div>
            <div class="tag">
              <p class="comments">詳細記入欄：<textarea name="comments" placeholder="詳細" value="{{ old('comments', $injury->comments) }}"></textarea></p>
            </div>
            
            <div class="btn-wrap">
              <input class="btn" type="submit" value="変更する">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
