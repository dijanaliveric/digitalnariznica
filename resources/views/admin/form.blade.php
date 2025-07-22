

<div class="mb-3">
  <label for="area" class="form-label">Područje</label>
  <select name="area" id="area" class="form-select @error('area') is-invalid @enderror">
    <option value="left" {{ old('area', $widget->area ?? '')=='left' ? 'selected' : '' }}>Lijevo</option>
    <option value="right" {{ old('area', $widget->area ?? '')=='right' ? 'selected' : '' }}>Desno</option>
  </select>
  @error('area')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="title" class="form-label">Naslov</label>
  <input type="text" name="title" id="title"
         value="{{ old('title', $widget->title ?? '') }}"
         class="form-control @error('title') is-invalid @enderror">
  @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="content" class="form-label">Sadržaj</label>
  <textarea name="content" id="content" rows="5"
            class="form-control @error('content') is-invalid @enderror">{{ old('content', $widget->content ?? '') }}</textarea>
  @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="order" class="form-label">Redoslijed</label>
  <input type="number" name="order" id="order"
         value="{{ old('order', $widget->order ?? 0) }}"
         class="form-control @error('order') is-invalid @enderror">
  @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="d-flex justify-content-between">
  <a href="{{ route('admin.widgets.index') }}" class="btn btn-secondary">Nazad</a>
  <button type="submit" class="btn btn-success">Spremi</button>
</div>

@push('scripts')
<script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: 'textarea#content',
    plugins: 'link image lists',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image'
  });
</script>
@endpush
