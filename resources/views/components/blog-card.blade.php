@props(['article'])
<div
  class="flex flex-col items-center bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs md:flex-row md:max-w-xl md:flex-row md:max-w-xl">
  <!-- Gambar Artikel -->
  <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/gambar-kosong.jpg') }}"
    alt="{{ $article->title }}" class="object-cover w-full rounded-lg h-64 md:h-auto md:w-48 mb-4 md:mb-0">

  <div class="flex flex-col justify-between md:p-4 leading-normal">

    {{-- Judul Artikel --}}
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-heading">{{ $article->title }}</h5>

    {{-- Penulis dan Waktu Upload --}}
    <p class="mb-3 text-sm font-medium text-gray-500 dark:text-gray-400">
      {{ $article->user->name }} <span class="mx-1">•</span> <time
        datetime="{{ $article->created_at }}">{{ $article->created_at->diffForHumans() }}</time>
    </p>

    {{-- Ringkasan Artikel --}}
    <p class="mb-6 text-body">{{ Str::limit(strip_tags($article->body), 150, '...') }}</p>

    <div>
      <a href="{{ route('articles.show', $article->slug) }}"
        class="inline-flex items-center w-auto text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
        Read more
        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 12H5m14 0-4 4m4-4-4-4" />
        </svg>
      </a>
    </div>
  </div>
</div>
