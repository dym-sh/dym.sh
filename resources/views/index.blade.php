<x-layout>
<main class="w-30 c">
    {{ $greeting }}. {{ $self }}

<ol>
@foreach($articles as $article)
    <li><a href="/{{ $article['slug'] }}">{{ $article['title'] ?? $article['slug'] }}</a>
@endforeach
</ol>

    <img src="/index.png" width="500" alt="list of avatars used over the years, currently planning on visual collection for this type of postings">
</main>
</x-layout>
