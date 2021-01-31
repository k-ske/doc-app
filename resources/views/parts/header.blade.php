<link rel="stylesheet" href="css/parts/header.css">

<div class="allHeader">
  <div class="headArea">
    <div class="headList">
      <div class="headerLeft">
        <div class="title"><a href="/">DOC-APP</a></div>
      </div>
      @auth
        <div class="headerRight">
          <div class="logOut"><a href="{{ route('logout') }}">ログアウト</a></div>  
        </form>
        </div>
      @else
        <div class="headerRight">
          <div class="logIn"><a href="{{ route('login') }}">ログイン</a></div>
          <div class="signUp"><a href="{{ route('register') }}">会員登録</a></div>
        </div> 
      @endauth
    </div>
  </div>

  <div class="subheadArea">
    <div class="menuList">
      <ul class="topMenu">
        <li class="home">
          <a href="/">ホーム</a>
        </li>
        <li class="articleSearch">
          <a href="/">記事を検索する</a>
        </li>
        <li class="hospitalSearch">
          <a href="/">病院を検索する</a>
        </li>
      @auth
        <li class="subhead-myPage">
          <a href="/">マイページ</a>
        </li>
      @else
        <li class="subhead-logIn">
          <a href="{{ route('login') }}">ログイン</a>
        </li>
      @endauth
      </ul>
    </div>
  </div>
</div>
    