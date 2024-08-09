<x-layout-dashboard>

<ol>
@foreach($articles as $article)
    <li><a href="/{{ $article['slug'] }}">{{ $article['title'] ?? $article['slug'] }}</a>
@endforeach
</ol>

// todo other lists; stats

</x-layout-dashboard>
