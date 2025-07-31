@props([
    'label' => '', 
    'name',
    'type' => [
        'text' => 'text', 
        'number' => 'number',
        'file' => 'file', 
        'date' => 'date'
    ],
    'placeholder' => '',
    'id' => '',
    'value' => '',
])

@php
    $inputId = $id ?? $name;
@endphp

<div class="mb-4">
    @if ($label)
        <label for="{{ $inputId }}" class="block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    @if ($type == 'file')
        <input 
            type="file"
            id="{{ $inputId }}"
            name="{{ $name }}"
            class="file:px-4 file:p-2 file:border w-1/2 border border-ics-gray-300 bg-white file:bg-ics-primary-100 file:text-white"
            placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}"
        />
    @else
        <input 
            type="{{ $type }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            id="{{ $inputId }}"
            value="{{ old($name, $value) }}"
            {{ $attributes->merge(['class' => 'w-full border border-gray-300 rounded p-2']) }}
        />
    @endif
    

    @error($name)
        <p class="text-sm text-ics-danger mt-1">{{ $message }}</p>        
    @enderror
</div>