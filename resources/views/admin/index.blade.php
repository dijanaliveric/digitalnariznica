@extends('layouts.app')

@section('title', 'Upravljanje widgetima')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Widgeti</h1>
    <a href="{{ route('admin.widgets.create') }}" class="btn btn-primary">Dodaj widget</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Područje</th>
        <th>Naslov</th>
        <th>Redoslijed</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($widgets as $widget)
      <tr>
        <td>{{ $widget->id }}</td>
        <td>{{ ucfirst($widget->area) }}</td>
        <td>{{ $widget->title }}</td>
        <td>{{ $widget->order }}</td>
        <td class="d-flex gap-2">
          <a href="{{ route('admin.widgets.edit', $widget) }}" class="btn btn-sm btn-secondary">Uredi</a>
          <form action="{{ route('admin.widgets.destroy', $widget) }}" method="POST" onsubmit="return confirm('Sigurno obrisati widget?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="text-center">Nema widgeta za prikaz.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
