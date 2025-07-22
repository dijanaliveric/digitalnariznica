
@extends('layouts.app')
@section('title','Uredi widget')
@section('content')
  <form action="{{ route('admin.widgets.update', $widget) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.widgets.form')
  </form>
@endsection
