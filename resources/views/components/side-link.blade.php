@props(['href', 'active' => false])

@php
  $isActive = $active || request()->fullUrlIs($href) || request()->url() === $href;

  $classes = $isActive
      ? 'flex items-center px-2 py-1.5 text-white font-semibold bg-[#12345A] rounded-base group'
      : 'flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary group';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
