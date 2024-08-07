<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf8">
<title>{{ request()->path() == '/'
  ? 'Dym Sohin' : '/'.request()->path().' of @dym' }}</title>
<meta property="og:title" content="{{ request()->path() == '/'
  ? 'Dym Sohin' : '/'.request()->path().' of @dym' }}">
<meta property="og:site_name" content="Dym Sohin">
<meta name="description" content="{{ request()->path() == '/'
  ? 'instance' : '/'.request()->path().' ' }}of @dym">
<meta property="og:description" content="{{ request()->path() == '/'
  ? 'instance' : '/'.request()->path().' ' }}of @dym">
<meta property="og:type" content="article">
<meta property="og:url" content="https://dym.sh/{{ request()->path() == '/'
  ? '' : request()->path() }}">
<meta property="og:image" content="/th.png">
<meta property="og:logo" content="/icon.png">
<meta name="twitter:card" content="summary_large_image">

<meta name="theme-color" content="#222222">
<meta name="viewport" content="width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link sizes="128x128" href="/favicon.ico" type="image/png" rel="icon">
<link sizes="500x500" href="/icon.png" type="image/png" rel="icon">
<link sizes="500x500" href="/icon.png" type="image/png" rel="apple-touch-icon">

<link rel="alternate" type="application/rss+xml" title="global feed" href="/rss">
<link rel="canonical" href="https://dym.sh/{{ request()->path() }}">

<link rel="me" href="mailto:re@dym.sh">
<link rel="me" href="@dym@dym.sh">
<link rel="me" href="https://dym.sh/@dym">
<link rel="me" href="https://bsky.app/profile/designcoder.bsky.social">
<link rel="me" href="https://codepen.io/dym-sh">
<link rel="me" href="https://dym-sh.tumblr.com">
<link rel="me" href="https://figma.com/@dym_sh">
<link rel="me" href="https://github.com/dym-sh">
<link rel="me" href="https://indieweb.org/User:Dym.sh">
<link rel="me" href="https://layers.to/dym_sh">
<link rel="me" href="https://lemmy.world/u/dym_sh">
<link rel="me" href="https://linkedin.com/in/dym-sohin">
<link rel="me" href="https://read.cv/dym_sh">
<link rel="me" href="https://twitch.tv/DesignCoder">
<link rel="me" href="https://twitter.com/dym_sh">
<link rel="me" href="https://userstyles.world/user/dym-sh">
<link rel="me" href="https://youtube.com/@dym_sh">

<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

<nav class="c">
  <div class="buttons round">
    <x-nav-link class="red">graphics</x-nav-link>
    <x-nav-link class="yellow">photos</x-nav-link>
    <x-nav-link class="green">comics</x-nav-link>
    <x-nav-link class="blue">code</x-nav-link>
    <x-nav-link class="rose">notes</x-nav-link>
  </div>
</nav>


{{ $slot }}


<footer class="c">
  <div class="buttons round">
    <a href="{{ str_starts_with(request()->path(), 'about') ? '/' : '/about/' }}"
      class="bg-icon" title="{{ str_starts_with(request()->path(), 'about') ? '/' : 'about' }}"
      ><span class="hidden">{{ str_starts_with(request()->path(), 'about') ? '/' : 'about' }}</span>
    </a>
  </div>
</footer>

</body></html>
