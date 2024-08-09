<x-layout-dashboard>

<form class="col c w-30" method="post" name="new_form" action="/new">
	@csrf
	<x-input type="hidden" value="0">id</x-input>
	<x-input>title</x-input>
	<x-input pattern="[A-Za-z0-9-]+" required>slug</x-input>
	<x-input type="textarea">body</x-input>
  <button type="submit">Create new</button>
</form>

</x-layout-dashboard>
