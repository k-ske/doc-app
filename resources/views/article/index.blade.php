@extends('layouts.common')
@section('title', 'トップページ')

@section('content')
  <link rel="stylesheet" href="/css/article/index.css">

  <div class="main-wrap">
    <div class="main-page">
      <div class="injury-file">
        <h3 class="profile">記事一覧</h3>
       
        <thead>
        <tr>
            <th>作成日時</th>
            <th>件名</th>
            <th>メッセージ</th>
            <th>処理</th>
        </tr>
        </thead>
          @foreach ($articles as $article)
          @endforeach
               
                </td>
                <td class="text-nowrap">
                    <p><a href="" class="btn btn-primary btn-sm">詳細</a></p>
                    <p><a href="" class="btn btn-info btn-sm">編集</a></p>
                    <p><a href="" class="btn btn-danger btn-sm">削除</a></p>
                </td>
         
          
        
        
      </div>
    </div> 
  </div>

  
@endsection