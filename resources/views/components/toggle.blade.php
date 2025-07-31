@props([
    'label' => '',
    'name',
    'id' => '',
    'checked' => false,
])

@php
    $toggleId = $id ?: $name;
@endphp

<label for="{{ $toggleId }}" class="flex items-center cursor-pointer space-x-3 select-none">
    <!-- Toggle -->
    <div class="relative">
        <input
            type="checkbox"
            name="{{ $name }}"
            id="{{ $toggleId }}"
            @checked(old($name, $checked))
            class="sr-only peer"
            {{ $attributes }}
        >
        <div class="w-11 h-6 bg-ics-gray-300 rounded-full peer-checked:bg-ics-primary-100 transition-colors duration-300"></div>
        <div class="absolute top-0.5 left-0.5 bg-white w-5 h-5 rounded-full shadow-md transform peer-checked:translate-x-5 transition-transform duration-300"></div>
    </div>

    <!-- Label testo -->
    @if ($label)
        <span class="text-ics-primary-100 text-sm font-medium">{{ $label }}</span>
    @endif
</label>
