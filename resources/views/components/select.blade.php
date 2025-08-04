@props([
    'label' => '',
    'name',
    'id' => null,
    'options' => [], 
    'selected' => null,
])

@php
    $selectId = $id ?? $name;
@endphp

<div class="mb-4">
    @if ($label)
        <label for="{{ $selectId }}" class="block text-sm font-medium text-ics-primary-100 mb-1">
            {{ $label }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        id="{{ $selectId }}"
        {{ $attributes->merge(['class' => 'w-1/2 border border-ics-gray-200 rounded p-2']) }}
    >
        <option value="">Seleziona...</option>

        @foreach ($options as $key => $text)
            <option value="{{ $key }}" {{ old($name, $selected) == $key ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="text-sm text-ics-danger-100 mt-1">{{ $message }}</p>
    @enderror
</div>
