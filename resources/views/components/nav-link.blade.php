<a href="{{ str_starts_with(request()->path(), $slot) ? '/' : '/'.$slot.'/' }}"
   title="{{ $slot }}"
   aria-current="{{ str_starts_with(request()->path(), $slot) ? 'true' : 'false' }}"
   {{ $attributes->merge(['class' => str_starts_with(request()->path(), $slot ) ? 'current' : '' ])}}
   ><span class="hidden">{{ $slot }}</span></a>
