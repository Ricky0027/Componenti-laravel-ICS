@props([
    'label' => '',
    'name',
    'id' => null,
    'rows' => '4',
    'value'  => '',
])

@php
    $textareaId = $id ?? $name;
@endphp

<div class="mb-4">
    @if ($label)
        <label for="{{ $textareaId }}" class="block text-sm font-medium text-ics-primary-100 mb-1">
            {{ $label }}
        </label>
    @endif

    <textarea 
        name="{{ $name }}"
        id="{{ $textareaId }}"
        rows="{{ $rows }}"
        {{ $attributes->merge(['class' => 'w-1/2 border border-ics-gray-200 rounded p-2 focus:ring-ics-primary-100 focus:border-ics-primary-100']) }}>
        {{ old($name, $value) }}
    </textarea>

    @error($name)
        <p class="text-sm text-ics-danger mt-1">{{ $message }}</p>
    @enderror
</div>