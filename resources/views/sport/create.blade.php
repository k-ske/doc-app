@extends('layouts.common')
@section('title', '活動歴登録')

@section('content')
  <p>スポーツ活動歴</p>

  <form action="{{ route('sport.store') }} " method="POST">
    @csrf
    <h3>各年代において取り組んだスポーツ</h3>
    <p>小学生：<input type="text" name="es_sport" value="{{ old('es_sport') }}"></p>
    <p>詳細記入欄：<textarea name="es_comment" placeholder="ポジションなど" value="{{ old('es_comment') }}"></textarea></p>
    <p>中学生：<input type="text" name="jhs_sport" value="{{ old('jhs_sport') }}"></p>
    <p>詳細記入欄：<textarea name="jhs_comment" placeholder="ポジションなど" value="{{ old('jhs_comment') }}"></textarea></p>
    <p>高校生：<input type="text" name="hs_sport" value="{{ old('hs_sport') }}"></p>
    <p>詳細記入欄：<textarea name="hs_comment" placeholder="ポジションなど" value="{{ old('hs_comment') }}"></textarea></p>
    <p>大学生：<input type="text" name="co_sport" value="{{ old('co_sport') }}"></p>
    <p>詳細記入欄：<textarea name="co_comment" placeholder="ポジションなど" value="{{ old('co_comment') }}"></textarea></p>
    <input type="submit" value="登録する">
  </form>
@endsection