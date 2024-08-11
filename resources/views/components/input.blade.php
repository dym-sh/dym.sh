@if( 'hidden' === $attributes['type'] )
  <input
      name="{{ $slot }}"
      {{ $attributes->merge() }}
      >

@elseif( 'checkbox' == $attributes['type'] )
  <div class="x-input"
    title="{{ $attributes['title'] ?? $slot }}"
    >
    <input type="checkbox" name="{{ $slug }}"
      {{ $attributes['value'] ? 'checked="checked"' : '' }}
      >
    <label for={{ $slug }}></label>

  </div>

@elseif( 'textarea' == $attributes['type'] )

  <div class="x-input"
    title="{{ $attributes['title'] ?? $slot }}"
    >
    <label
      for="{{ $slot }}"
      >{{ $attributes['title'] ?? $slot }}</label>
    <textarea
      name="{{ $slot }}"
      id="{{ $slot }}"
      placeholder="{{ $attributes['title'] ?? $slot }}"
      {{ $attributes->merge()->filter(fn ($value, $key) => !in_array($key, ['title','value'])) }}
      >{{ $attributes['value'] ?? '' }}</textarea>

  @error( "$slot" )
    <p class="error">{{ $message }}</p>
  @enderror
  </div>

@else

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