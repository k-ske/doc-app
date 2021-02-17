@extends('layouts.doc-toppage')
@section('title', 'オンライン診断')

@section('content')
  <link rel="stylesheet" href="/css/evaluation/create.css">
  
  <div class="main-wrap">
    <div class="main-page">
      <div class="evaluation-file">
        <h3 class="profile">オンライン診断ページ</h3>
        <div class="article-make">
          <form action="{{ route('evaluation.create') }}" method="POST">
            @csrf
            <div class="evaluation-main">
              <input type="hidden" name="injury_id" value="{{ $injury_id }}">
              <input type="hidden" name="doctor_id" value="{{ Auth::id() }}">              
              <div class="tag">
                <input name="injury_name" placeholder="診断名" value="{{ old('injury_name') }}">
              </div>
              <div class="comments">
                <textarea class="comments" name="comments" cols="50" rows="10" value="{{ old('comments') }}"></textarea>
              </div>
              <div class="advice">
                <textarea class="advice" name="advice" cols="50" rows="10" value="{{ old('advice') }}"></textarea>
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