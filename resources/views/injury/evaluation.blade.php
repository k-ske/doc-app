@extends('layouts.mypage')
@section('title', '怪我診断')

@section('content')
  <link rel="stylesheet" href="/css/injury/evaluation.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="evaluation-file">
        <h3 class="top-bar">オンライン診断</h3> 
          <div class="injury-top">
            <div class="injury-title">
              <p>怪我：<u>{{ $injury->injury_site }}</u></p>
            </div>
            <div class="date">
              <p>{{ $injury->created_at->format('Y.m.d') }}</p>
            </div>
          </div>
          <div class="tag">
            <p>MOI：{{$injury->moi}}</p>
          </div>
          <div class="tag">
            <p>怪我した日時：{{$injury->when_injured}}</p>
          </div>          
          <div class="tag">
            <p>痛みの種類：{{$injury->pain_type}}</p>
          </div>
          <div class="tag">
            <p>痛みの程度：{{$injury->how_painful}}</p>
          </div>
          <div class="tag">
            <p>詳細：{{$injury->comments}}</p>    
          </div>           
          
          <hr>
          @foreach($injury->evaluations as $evaluation)
            <div class="evaluation">              
              <div class="eval-top">
                <div class="eval">{{ $evaluation->injury_name }}</div>
                <div class="eval-date">{{ $evaluation->created_at->format('y.m.d') }}</div>
              </div>
              <div class="eval">コメント：{{ $evaluation->comments }}</div>
              <div class="eval">アドバイス：{{ $evaluation->advice }}</div>
            </div>
            <hr>
          @endforeach
      </div>
    </div> 
  </div>

  
@endsection