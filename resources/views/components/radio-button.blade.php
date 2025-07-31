@props([
    'name',
    'id' => null,
    'label' => '',
    'value' => '1',
    'checked' => false,
])

@php
    $radioId = $id ?? $name . '-' . Str::slug($value);
    $isChecked = old($name, $checked) == $value ? 'checked' : '';
@endphp

<div class="flex items-center space-x-2">
    <input
        type="radio"
        name="{{ $name }}"
        id="{{ $radioId }}"
        value="{{ $value }}"
        {{ $isChecked }}
        class="sr-only peer"
        {{ $attributes }}
    />
    
    <label for="{{ $radioId }}" class="w-10 h-10 rounded-full bg-ics-gray-200 flex items-center justify-center cursor-pointer transition">
        @if ($isChecked)
            <i class="fa-solid fa-circle text-4xl text-ics-primary-100"></i>
        @endif
    </label>
        

    
    @if($label)
        <label for="{{ $radioId }}" class="text-sm text-ics-primary-100 select-none">
            {{ $label }}
        </label>
    @endif
</div>

@error($name)
    <p class="form-error-text">{{ $message }}</p>
@enderror

