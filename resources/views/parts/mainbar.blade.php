<link rel="stylesheet" href="/css/parts/mainbar.css">

<div class="myPage">
  <div class="myTitle">マイページ</div>
  <div class="myPageBar">
    <ul class="myPageList">
      <li class="sportBar">
        <a href="{{ action('App\Http\Controllers\SportController@index') }}">スポーツ活動歴</a>
      </li>
      <li class="injuryBar">
        <a href="{{ action('App\Http\Controllers\InjuryController@index') }}">既往歴</a>
      </li>
    </ul>
  </div>
</div>