@extends('layouts.app')

@section('title', $advice->title)

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold mb-4">{{ $advice->title }}</h1>

        {{-- Ovdje renderiramo sav HTML sadržaj, uključujući <img> tagove --}}
        <div class="prose prose-lg">
            {!! $advice->content !!}
        </div>

        <p class="mt-4 text-sm text-gray-600">
            Kreirano: {{ $advice->created_at->format('d.m.Y') }}
        </p>
    </div>
@endsection

@section('sidebar-left')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection

@section('sidebar-right')
    <p class="text-gray-600">Prostor za vašu reklamu ili link</p>
@endsection
