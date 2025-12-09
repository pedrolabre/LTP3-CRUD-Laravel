@props(['label', 'name', 'options' => [], 'value' => '', 'required' => false])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }} @if($required)*@endif
    </label>
    <select 
        class="form-select @error($name) is-invalid @enderror" 
        id="{{ $name }}" 
        name="{{ $name }}"
        @if($required) required @endif
        {{ $attributes }}>
        <option value="">Selecione...</option>
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
