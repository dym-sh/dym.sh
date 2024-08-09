<x-layout-admin>

<ol>
@foreach($articles as $article)
    <li><a href="/{{ $article['slug'] }}">{{ $article['title'] ?? $article['slug'] }}</a>
@endforeach
</ol>

</x-layout-admin>
