<link rel="stylesheet" href="/css/parts/mainbar.css">

<div class="myPage">
  <div class="myTitle">マイページ</div>
  <div class="myPageBar">
    <ul class="myPageList">
      <li class="sportBar">
        <a href="{{ action('App\Http\Controllers\DoctorController@index') }}">経歴登録</a>
      </li>
      <li class="injuryBar">
        <a href="{{ action('App\Http\Controllers\EvaluationController@index') }}">オンライン診断一覧</a>
      </li>
    </ul>
  </div>
</div>