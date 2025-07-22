@extends('layouts.app')

@section('header')
    <h1 class="text-2xl font-semibold text-gray-900">Programi potpore</h1>
@endsection

@section('content')
    <div class="space-y-6">
        @forelse($programs as $program)
            <article class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-medium text-blue-600 mb-2">{{ $program->title }}</h2>
                <p class="text-gray-700 mb-4">{{ Str::limit($program->description, 150) }}</p>
                <a href="{{ route('programs.show', $program) }}" class="text-orange-600 hover:underline">Pročitaj više</a>
            </article>
        @empty
            <p class="text-gray-600">Trenutno nema dostupnih programa potpore.</p>
        @endforelse

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $programs->links() }}
        </div>
    </div>
@endsection

@section('sidebar-left')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection

@section('sidebar-right')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection