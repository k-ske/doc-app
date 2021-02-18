<link rel="stylesheet" href="/css/parts/doc-header.css">

<div class="allHeader">
  <div class="headArea">
    <div class="headList">
      <div class="headerLeft">
        <div class="title"><a href="/doctor/top">DOC-APP</a></div>
      </div>
      @if(Auth::guard('doctor')->check())
        <div class="headerRight">
          <div class="logOut"><a href="{{ route('doctor.logout') }}">ログアウト</a></div>  
        </div>
      @else
        <div class="headerRight">
          <div class="logIn"><a href="{{ route('doctor.login') }}">ログイン</a></div>
          <div class="signUp"><a href="{{ route('doctor.register') }}">会員登録</a></div>
        </div> 
      @endif
    </div>
  </div>

  <div class="subheadArea">
    <div class="menuList">
      <ul class="topMenu-left">
        <li class="home">
          <a href="/">ホーム</a>
        </li>
        <li class="evaluation">
          <a href="/">オンライン診断</a>
        </li>
        <li class="articlePost">
          <a href="{{ route('doctor.article.create') }}">記事を作成する</a>
        </li>
        @if(Auth::guard('doctor')->check())
        <li class="subhead-myPage">
          <a href="{{ action('App\Http\Controllers\DoctorController@index') }}">マイページ</a>
        </li>
        @else
        <li class="subhead-logIn">
          <a href="{{ route('doctor.login') }}">ログイン</a>
        </li>
        @endif
      </ul>
      <ul class="topMenu-right">
        <li class="rightMenu">
          <a href="/">MORE</a>
        </li>
      </ul>
    </div>
  </div>
</div>
    