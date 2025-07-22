@extends('layouts.app')

@section('title', $news->title)

@section('content')
  @if($news->image_url)
    <img
      src="{{ asset('storage/' . $news->image_url) }}"
      alt="{{ $news->title }}"
      class="w-full max-w-md mt-4 rounded-lg shadow-md"
    >
  @endif

  <div class="mt-6 prose">
    {!! $news->content !!}
  </div>
@endsection
