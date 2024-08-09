<x-layout>

<main class="article">

<h1>{{ $title ?? $slug }}</h1>

<section>
{{ $body }}
</section>

</main>

@auth
<form class="col c" method="post" name="delete_form" action="/delete/{{ $slug }}">
  @csrf
	<a href="/edit/{{ $slug }}">Edit</a>
  <button type="submit">Delete</button>
</form>
@endauth

</x-layout>
