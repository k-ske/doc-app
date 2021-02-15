@extends('layouts.common')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/injury/top.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="article-list">
        <h3 class="top-bar">怪我一覧</h3>
        <table class="table">
          <thead>
          <tr>
              <th class="bar">登録日時</th>
              <th class="bar">怪我</th>
              <th class="bar">内容</th>
              <th class="bar"></th>
          </tr>
          </thead>
          <tbody id="tbl">
          @foreach ($injuries as $injury)
            <tr>
              <td class="injury">{{ $injury->created_at->format('Y.m.d') }}</td>
              <td class="injury">{{ $injury->injury_site }}</td>
              <td class="injury">{!! nl2br(e(Str::limit($injury->comments, 10))) !!}</td>
              <td class="injury"><a href="{{ route('injury.show', $injury->id) }}">READ MORE</a></td>
          @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>

  
@endsection