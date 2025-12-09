@props(['label' => 'Foto da Roupa', 'name' => 'image', 'currentImage' => null, 'required' => false])

<div class="mb-3">
    @if($currentImage)
        <label class="form-label">Imagem Atual</label>
        <div class="mb-3">
            <img src="{{ asset('storage/' . $currentImage) }}" 
                 alt="Imagem atual" 
                 class="img-thumbnail" 
                 style="max-width: 300px;">
        </div>
    @endif

    <label for="{{ $name }}" class="form-label">
        {{ $currentImage ? 'Alterar ' : '' }}{{ $label }} (Opcional)
    </label>
    <input 
        type="file" 
        class="form-control @error($name) is-invalid @enderror" 
        id="{{ $name }}" 
        name="{{ $name }}"
        accept="image/*"
        onchange="previewImage(event, '{{ $name }}')"
        {{ $attributes }}>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small class="text-muted">Formatos aceitos: JPG, PNG, GIF (máx. 2MB)</small>
    
    <!-- Preview da Nova Imagem -->
    <div id="imagePreview-{{ $name }}" class="mt-3" style="display: none;">
        <img id="preview-{{ $name }}" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px;">
    </div>
</div>

@once
    @push('scripts')
    <script>
    function previewImage(event, fieldName) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('preview-' + fieldName);
            const previewDiv = document.getElementById('imagePreview-' + fieldName);
            preview.src = reader.result;
            previewDiv.style.display = 'block';
        }
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
    </script>
    @endpush
@endonce
