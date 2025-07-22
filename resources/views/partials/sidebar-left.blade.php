
@php
    use App\Models\Widget;
    $widgets = Widget::where('area','left')->orderBy('order')->get();
@endphp

@foreach($widgets as $w)
  <div class="bg-card-bg p-4 mb-6 rounded-lg shadow">
    <div class="bg-primary text-white font-semibold px-3 py-2 rounded-t-lg">
      {{ $w->title }}
    </div>
    <div class="p-3 prose prose-sm">
      {{-- Render raw HTML so images and lists work --}}
      {!! $w->content !!}
    </div>
  </div>
@endforeach
