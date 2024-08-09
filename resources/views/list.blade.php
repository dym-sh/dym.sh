<x-layout>
<main class="w-30 c">

<ul class="list">
@foreach($items as $item)
    <li><a href="/{{ $item['slug'] }}">
        <img src="{{ $item['thumb'] ?? '' }}">
        <span>{{ $item['title'] ?? $item['slug'] }}</span>
    </a></li>
@endforeach
</ul>

</main>
</x-layout>
