<x-layout-admin>

<form class="col c w-30" method="post" name="new_form" action="/new">
	@csrf
	<x-input type="hidden">id</x-input>
	<x-input>title</x-input>
	<x-input pattern="[A-Za-z0-9-]+" required>slug</x-input>
	<textarea name="body"></textarea>
  <button type="submit">Create new</button>
</form>

</x-layout-admin>
