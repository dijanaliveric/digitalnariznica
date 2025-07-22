@extends('layouts.app')

@section('title', 'Početna')

@section('content')
    @foreach(App\Models\Widget::where('area','home')->orderBy('order')->get() as $widget)
        {!! $widget->content !!}
    @endforeach
@endsection
