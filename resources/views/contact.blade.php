@extends('layouts.app')

@section('header')
    <h1 class="text-2xl font-semibold text-gray-900">Kontakt</h1>
@endsection

@section('content')
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <ul class="list-disc list-inside text-gray-700">
      <li>Adresa: Ulica 123, Grad</li>
      <li>Telefon: +385 1 2345 678</li>
      <li>Email: <a href="mailto:info@digitalnariznica.com" class="text-blue-600 hover:underline">info@digitalnariznica.com</a></li>
    </ul>
  </div>
@endsection

@section('sidebar-left')
  <p>Prostor za vašu reklamu ili link</p>
@endsection

@section('sidebar-right')
  <p>Prostor za vašu reklamu ili link</p>
@endsection
