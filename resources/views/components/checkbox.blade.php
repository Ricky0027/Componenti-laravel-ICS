@props([
    'name',
    'id' => null,
    'label' => '',
    'value' => '1',
    'checked' => false,
])

@php
    $checkboxId = $id ?? $name;
    $isChecked = old($name, $checked) ? 'checked' : '';
@endphp

<div class="flex items-center gap-x-2">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $checkboxId }}"
        value="{{ $value }}"
        {{ $isChecked }}
        class="sr-only peer"
        {{ $attributes }}
    />

    <label for="{{ $checkboxId }}" class="w-12 h-12 rounded-md bg-ics-gray-300 flex items-center justify-center peer-checked:bg-ics-gray-300 cursor-pointer transition-colors">
        @if ($isChecked)
            <i class="fa-solid fa-check text-4xl text-ics-primary-100"></i>    
        @endif
    </label>

    @if($label)
        <label for="{{ $checkboxId }}" class="text-sm text-ics-primary-100 select-none">
            {{ $label }}
        </label>
    @endif
</div>

@error($name)
    <p class="form-error-text">{{ $message }}</p>
@enderror
