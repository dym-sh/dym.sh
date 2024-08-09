@if( 'hidden' !== $attributes['type'] )

<div class="x-input"
  title="{{ $attributes['title'] ?? $slot }}"
  >
  <label
    for="{{ $slot }}"
    >{{ $attributes['title'] ?? $slot }}</label>
  <input
    name="{{ $slot }}"
    id="{{ $slot }}"
    placeholder="{{ $attributes['title'] ?? $slot }}"
    {{ $attributes->merge()->filter(fn ($value, $key) => !in_array($key, ['title'])) }}
    >

@error( "$slot" )
  <p class="error">{{ $message }}</p>
@enderror
</div>

@endif