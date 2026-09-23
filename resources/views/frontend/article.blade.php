<x-layout :title="$title">
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
      <article class="mx-auto w-full max-w-2xl format format-xs sm:format-base lg:format-lg format-blue">

        <!-- Header & Meta Penulis -->
        <header class="mb-4 lg:mb-6 not-format">
          <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-gray-900">
              <!-- Foto Profil Dummy / Inisial Penulis -->
              <div
                class="w-12 h-12 rounded-full bg-gray-200  flex items-center justify-center font-bold text-gray-700 text-lg mr-4">
                {{ strtoupper(substr($article->user->name, 0, 1)) }}
              </div>
              <div>
                <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $article->user->name }}</a>
                <p class="text-base text-gray-500">
                  <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('d M Y') }}</time>
                  <span class="mx-1">•</span>
                  <span>{{ $article->created_at->diffForHumans() }}</span>
                </p>
              </div>
            </div>
          </address>

          <!-- Judul Utama Artikel -->
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">
            {{ $article->title }}
          </h1>
        </header>

        <!-- Gambar Utama Artikel (Opsional) -->
        @if ($article->image)
          <figure class="mb-6">
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
              class="w-full rounded-lg object-cover max-h-[400px]">
          </figure>
        @endif

        <!-- Isi Konten Artikel -->
        <div class="text-gray-700 leading-relaxed space-y-4 text-lg">
          {!! nl2br(e($article->body)) !!}
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-8 pt-6 border-t border-gray-200">
          <a href="{{ route('articles.index') }}"
            class="inline-flex items-center text-sm font-medium text-blue-600 hover:underline">
            <svg class="w-4 h-4 mr-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m7 7-7-7 7-7" />
            </svg>
            Kembali ke Daftar Artikel
          </a>
        </div>

      </article>
    </div>
  </main>
</x-layout>
