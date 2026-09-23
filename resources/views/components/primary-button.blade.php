<button
  {{ $attributes->merge([
      'type' => 'submit',
      'class' =>
          'w-full text-white bg-[#12345A] hover:bg-[#061b33] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors',
  ]) }}>
  {{ $slot }}
</button>
