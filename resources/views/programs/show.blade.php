@extends('layouts.app')

@section('title', $program->title)

@section('content')
  <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
    {{-- Naslov programa --}}
    <h1 class="text-2xl font-bold mb-4">{{ $program->title }}</h1>

    {{-- Opis programa --}}
    @if($program->description)
      <div class="mb-6 text-gray-700">
        {!! nl2br(e($program->description)) !!}
      </div>
    @endif

    {{-- Link na više informacija --}}
    @if($program->link)
      <a href="{{ $program->link }}"
         target="_blank"
         rel="noopener"
         class="inline-block px-4 py-2 bg-secondary text-white rounded hover:bg-accent transition">
        Saznajte više
      </a>
    @endif
  </div>
@endsection
