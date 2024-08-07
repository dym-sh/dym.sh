<x-layout-admin>

<form class="col c w-30" method="post" name="edit_form" id="edit_form">
	<input type="text" name="title" class="w-30">
	<input type="text" name="slug" class="w-30" pattern="[A-Za-z0-9-]+" required>
	<textarea name="body" class="w-30"></textarea>
  <button onclick="edit_form.submit()">save</button>
</form>

</x-layout-admin>
