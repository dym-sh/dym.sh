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
<form class="col c" method="post" name="login_form" id="login_form" action="/login">
  @csrf
  <input type="email" name="email" placeholder="email"
    :value="old('email')"
    required>
  <input type="password" name="password" placeholder="password" required>
  <button onclick="login_form.submit()">Login</button>
</form>
@endguest

@auth
{{ $slot }}
@endauth

<footer class="c">
  <form class="buttons round c" method="get" name="search_form">
    <input type="search" name="search" placeholder="search">
    <button onclick="search_form.submit()"
      class="gray" title="search"
      ><span class="hidden">search</span>
    </button>
    <a href="/rss" class="orange" title="rss"><span class="hidden">rss</span>
    </a>
  </form>
</footer>

</body></html>