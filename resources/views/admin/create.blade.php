@extends('layouts.app')
@section('title','Dodaj widget')
@section('content')
  <form action="{{ route('admin.widgets.store') }}" method="POST">
    @csrf
    @include('admin.widgets.form')
  </form>
@endsection
