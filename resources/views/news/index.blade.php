{{-- resources/views/news/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Novosti')

@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($news as $item)
      <article class="bg-white rounded-lg shadow overflow-hidden">
        {{-- PRIKAŽI PRVU SLIKU ILI PLACEHOLDER --}}
        @if($img = $item->images->first())
          <img src="{{ asset('storage/' . $img->path) }}"
               alt="{{ $img->caption }}"
               class="w-full h-48 object-cover">
        @else
          <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
            Nema slike
          </div>
        @endif

        <div class="p-4">
          <h2 class="text-lg font-semibold text-secondary mb-1">{{ $item->title }}</h2>
          <p class="text-xs text-gray-500">{{ optional($item->published_at)->format('d.m.Y') }}</p>
          <p class="mt-2 text-gray-700">
            {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}
          </p>
          <a href="{{ route('news.show', $item) }}"
             class="inline-block mt-3 text-accent hover:underline">
            Pročitaj više
          </a>
        </div>
      </article>
    @endforeach
  </div>

  <div class="mt-6">
    {{ $news->links() }}
  </div>
@endsection
