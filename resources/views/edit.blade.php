<x-layout-dashboard>

<form class="col c w-30" method="post" action="/edit">
	@csrf
	<x-input type="hidden" value="{{ $id ?? 0 }}">id</x-input>
	<x-input class="w-30" value="{{ $title ?? '' }}">title</x-input>
	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $slug ?? '' }}"
		required>slug</x-input>
	<x-input type="textarea" class="w-30"
		value="{{ $body ?? '' }}"
		>body</x-input>

	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $category ?? '' }}">category</x-input>

	<x-input type="checkbox" pattern="[A-Za-z0-9-]+"
		value="{{ $is_collection ?? '' }}">is_collection</x-input>

	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $tag_1 ?? '' }}">tag_1</x-input>
	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $tag_2 ?? '' }}">tag_2</x-input>
	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $tag_3 ?? '' }}">tag_3</x-input>
	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $tag_4 ?? '' }}">tag_4</x-input>
	<x-input class="w-30" pattern="[A-Za-z0-9-]+"
		value="{{ $tag_5 ?? '' }}">tag_5</x-input>

  <button type="submit">Save</button>
</form>

</x-layout-dashboard>
