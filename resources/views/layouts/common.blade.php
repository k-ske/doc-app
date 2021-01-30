<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/common.css">
  </head>

  <body>
    <header>
      @include('parts.header')
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      @include('parts.footer')
    </footer>
  </body>

</html>