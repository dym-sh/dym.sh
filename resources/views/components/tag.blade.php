<a href="'/tags/'.$slot.'/' }}"
   aria-current="{{ str_starts_with(request()->path(), 'tags/'.$slot) ? 'true' : 'false' }}"
   {{ $attributes->merge(['class' => str_starts_with(request()->path(), 'tags/'.$slot ) ? 'current' : '' ])}}
   >{{ $slot }}</a>
