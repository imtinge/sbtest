<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'SbTes') -- 记录一生</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="" class="navbar-brand">Sb Test</a>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a href="/help" class="nav-link">帮助</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">登陆</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
