@extends('layouts.doc-toppage')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/injury/show.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="article-list">
        <h3 class="top-bar">怪我詳細</h3>          
          <div class="injury-top">
            <div class="injury-title">
              <p>怪我：<u>{{ $injury->injury_site }}</u></p>
            </div>
            <div class="date">
              <p>{{ $injury->created_at->format('Y.m.d') }}</p>
            </div>
          </div>
          
          <hr class="line">
          <div class="content">
            <p>MOI：{{$injury->moi}}</p>
          </div>
          <div class="content">
            <p>怪我した日時：{{$injury->when_injured}}</p>
          </div>          
          <div class="content">
            <p>痛みの種類：{{$injury->pain_type}}</p>
          </div>
          <div class="content">
            <p>痛みの程度：{{$injury->how_painful}}</p>
          </div>
          <div class="content">
            <p>詳細：{{$injury->comments}}</p>    
          </div>           
          
          @if(Auth::guard('doctor')->check())
          <div class="evaluation">
            <a href="{{ route('evaluation.create', ['injury_id' => $injury->id]) }}">オンライン診断</a>
          </div>
          
          @endif
      </div>
    </div> 
  </div>

  
@endsection