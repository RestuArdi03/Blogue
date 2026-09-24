@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
  if ($current) {
      $classes =
          'block py-2 px-3 text-white bg-[#12345A] rounded md:bg-transparent md:text-heading md:p-0 md:underline';
      $ariaCurrent = 'page';
  } else {
      $classes =
          'block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-[#12345A] md:p-0';
  }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes, 'aria-current' => $ariaCurrent]) }}>
  {{ $slot }}
</a>
