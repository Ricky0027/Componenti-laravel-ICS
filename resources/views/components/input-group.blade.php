@props([
    'label' => '',
    'name',
    'id' => null,
    'type' => 'text',
    'value' => '',
    'placeholder' => '',
    'addon' => '', // testo o HTML da mostrare (es. "@", "€", bottone)
    'addonPosition' => 'left', // 'left' o 'right'
])

@php
    $inputId = $id ?? $name;
@endphp

<div class="mb-4 w-1/2">
    @if ($label)
        <label for="{{ $inputId }}" class="block text-sm font-medium text-ics-primary-100 mb-1">
            {{ $label }}
        </label>
    @endif

    <div class="flex shadow-sm overflow-hidden">
        @if ($addon && $addonPosition === 'left')
            <span class="inline-flex items-center px-3 bg-ics-secondary-200 text-ics-primary-100 text-sm border border-r-0 border-ics-gray-300">
                {!! $addon !!}
            </span>
        @endif

        <input 
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $inputId }}"
            value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}"
            {{ $attributes->merge(['class' => 'flex-1 block w-full min-w-0 h-10 rounded-none border-ics-gray-300 focus:ring-ics-primary-100 focus:border-ics-primary-100']) }}
        />

        @if ($addon && $addonPosition === 'right')
            <span class="inline-flex items-center px-3 bg-white text-ics-primary-100 text-sm border border-l-0 border-ics-gray-300">
                {!! $addon !!}
            </span>
        @endif
    </div>

    @error($name)
        <p class="text-sm text-ics-danger-100 mt-1">{{ $message }}</p>
    @enderror
</div>
