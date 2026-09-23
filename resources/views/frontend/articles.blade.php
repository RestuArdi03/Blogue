<x-layout :title="$title">
  <div class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse ($articles as $article)
      <x-blog-card :article="$article" />
    @empty
      <p class="text-gray-500">Belum ada artikel yang diterbitkan.</p>
    @endforelse
  </div>
</x-layout>
