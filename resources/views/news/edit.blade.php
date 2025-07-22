@extends('layouts.app')

@section('title', 'Uredi vijest')

@section('content')
  <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Uredi vijest</h1>

    <form action="{{ route('news.update', $news) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label for="title" class="block font-medium text-gray-700">Naslov</label>
        <input
          type="text"
          name="title"
          id="title"
          value="{{ old('title', $news->title) }}"
          class="w-full mt-1 p-2 border rounded-md @error('title') border-red-500 @enderror"
        >
        @error('title')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="content" class="block font-medium text-gray-700">Sadržaj</label>
        <textarea
          name="content"
          id="content"
          rows="6"
          class="w-full mt-1 p-2 border rounded-md @error('content') border-red-500 @enderror"
        >{{ old('content', $news->content) }}</textarea>
        @error('content')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="image" class="block font-medium text-gray-700">Promijeni sliku</label>
        <input
          type="file"
          name="image"
          id="image"
          class="mt-1 @error('image') border-red-500 @enderror"
        >
        @error('image')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        @if($news->image_url)
          <p class="mt-2 text-sm text-gray-600">Trenutna slika:</p>
          <img
            src="{{ asset('storage/'.$news->image_url) }}"
            alt="{{ $news->title }}"
            class="w-48 h-auto rounded-md mt-2"
          >
        @endif
      </div>

      <div class="mb-4">
        <label for="published_at" class="block font-medium text-gray-700">Datum objave</label>
        <input
          type="date"
          name="published_at"
          id="published_at"
          value="{{ old('published_at', optional($news->published_at)->format('Y-m-d')) }}"
          class="mt-1 p-2 border rounded-md @error('published_at') border-red-500 @enderror"
        >
        @error('published_at')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex justify-end space-x-2">
        <a href="{{ route('news.index') }}"
           class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"
        >Odustani</a>
        <button type="submit"
                class="px-4 py-2 bg-accent text-white rounded hover:bg-secondary transition"
        >Spremi promjene</button>
      </div>
    </form>
  </div>
@endsection
