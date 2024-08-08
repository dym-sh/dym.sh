<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf8">
<title>{{ request()->path() }}</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

<nav class="c">
  <div class="buttons round">
    <x-nav-link class="orange">new</x-nav-link>
    <x-nav-link class="rose">list</x-nav-link>
    <x-nav-link class="pink">tags</x-nav-link>
    <x-nav-link class="teal">collections</x-nav-link>
    <x-nav-link class="gray">/</x-nav-link>
  </div>
</nav>


@guest

<a href="/register">Register</a>

<form class="col c" method="post" name="login_form" id="login_form" action="/login">
  @csrf
  <x-input type="email" :value="old('email')"
    title="E-Mail"
    required>email</x-input>
  <x-input type="password"
    title="Password"
    required>password</x-input>
  <button type="submit">Login</button>
</form>
@endguest

@auth
{{ $slot }}


<form class="col c" method="post" name="logout_form" id="logout_form" action="/logout">
  @csrf
  <button type="submit">Logout</button>
</form>
@endauth

<footer class="c">
  <form class="buttons round c" method="get" name="search_form">
    <input type="search" name="search" placeholder="search">
    <button onclick="search_form.submit()"
      class="gray" title="search"
      ><span class="hidden">search</span>
    </button>
    <x-nav-link class="orange">rss</x-nav-link>
    </a>
  </form>
</footer>

</body></html>