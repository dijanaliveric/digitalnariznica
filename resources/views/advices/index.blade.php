@extends('layouts.app')

@section('header')
    <h1 class="text-2xl font-semibold text-gray-900">Savjeti</h1>
@endsection

@section('content')
    <div class="space-y-6">
        @forelse($advices as $advice)
            <article class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-medium text-blue-600 mb-2">{{ $advice->title }}</h2>
                {{-- Izdvojimo prvih 150 znakova iz čistog teksta (bez HTML-a) --}}
                <p class="text-gray-700 mb-4">
                    {{ \Illuminate\Support\Str::limit(strip_tags($advice->content), 150) }}
                </p>
                <a href="{{ route('advices.show', $advice) }}"
                   class="text-orange-600 hover:underline">
                   Pročitaj više
                </a>
            </article>
        @empty
            <p class="text-gray-600">Trenutno nema dostupnih savjeta.</p>
        @endforelse

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $advices->links() }}
        </div>
    </div>
@endsection

@section('sidebar-left')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection

@section('sidebar-right')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection
