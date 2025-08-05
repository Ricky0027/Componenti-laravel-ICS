@props([
    'title' => '',
    'open' => false,
])

<div x-data="{ open: @json($open) }">
    <x-button 
        @click="open = !open" 
        type="button" 
        class="btn-primary-100 w-80 text-left flex items-center justify-between px-4"
    >
        <span>{{ $title }}</span>
        <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" />
        </svg>
        <svg x-show="open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 15l7-7 7 7" />
        </svg>
    </x-button>

    <div x-show="open" x-collapse x-cloak class="px-4 py-3 bg-white border-b border-ics-primary-100">
        {{ $slot }}
    </div>
</div>
