@extends('layouts.common')
@section('title', 'ユーザートップページ')

@section('content')
  @foreach ($sports as $sport)
    <p>小学生：{{ $sport->es_sport }}</p>
    <p>詳細：{{ $sport->es_comment }}</p>
    <p>中学生：{{ $sport->jhs_sport }}</p>
    <p>詳細：{{ $sport->jhs_comment }}</p>
    <p>高校生：{{ $sport->hs_sport }}</p>
    <p>詳細：{{ $sport->hs_comment }}</p>
    <p>大学生：{{ $sport->co_sport }}</p>
    <p>詳細：{{ $sport->co_comment }}</p>
  @endforeach
@endsection