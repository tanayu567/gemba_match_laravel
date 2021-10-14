<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>現場マッチ</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">ToDo App</a>
    <div class="my-navbar-control">
      @if(Auth::check())
        <span class="my-navbar-item">ようこそ, <!-- {{ Auth::user()->name }} -->さん</span>
        ｜
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" method="POST" style="display: none;">
          @csrf
        </form>
      @else
        <a class="my-navbar-item" href="#">ログイン</a>
        ｜
        <a class="my-navbar-item" href="#">会員登録</a>
      @endif
    </div>
  </nav>
</header>
  @yield('header')
  <main>
    @yield('content')
  </main>
  @yield('scripts')
</body>
</html>

