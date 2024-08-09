<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf8">
<title>{{ request()->path() }}</title>
<link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>

<body>

<nav class="c">
<form method="get" action="/search">
  <input type="search" name="q">
  <button type="submit">search</button>
</form>
  <a href="/dashboard">articles</a>
  <a href="/new">new</a>
  <a href="/categories">categories</a>
  <a href="/collections">collections</a>
  <a href="/tags">tags</a>

@auth
<form class="col c" method="post" name="logout_form" action="/logout">
  @csrf
  <button type="submit">Logout</button>
</form>
@endauth
</nav>

<main>
@guest
<form class="col c" method="post" name="login_form" action="/login">
  @csrf
  <x-input type="email" :value="old('email')"
    title="E-Mail"
    required>email</x-input>
  <x-input type="password"
    title="Password"
    required>password</x-input>
  <button type="submit">Login</button>
  <a href="/register">Register</a>
</form>
@endguest

@auth
{{ $slot }}
@endauth
</main>

</body></html>
