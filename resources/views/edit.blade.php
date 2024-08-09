<x-layout-dashboard>

<form class="col c w-30" method="post" name="edit_form" action="/edit">
	@csrf
	<x-input name="id" type="hidden"
		value="{{ $id ?? 0 }}">
	<x-input name="title" class="w-30"
		value="{{ $title ?? '' }}">
	<x-input name="slug" class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $slug ?? '' }}"
		required>
	<textarea name="body" class="w-30">{{ $body ?? '' }}</textarea>
  <button type="submit">Save</button>
</form>

</x-layout-dashboard>
