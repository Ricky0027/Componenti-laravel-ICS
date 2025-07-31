@props([
    'id' => 'modal-id',
    'title' => '',
    'subtitle' => '',
    'show' => '',
])

<div 
    x-data="{ open: @js($show) }"
    x-show="open"
    x-cloak
    id="{{ $id }}"
    @open-modal.window="if ($event.detail.id === '{{ $id }}') open = true"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
>
    <div 
        @click.away="open = false"
        class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative"
    >
        {{-- Header --}}
        <div class="flex justify-between items-center border-b pb-2 mb-4">
            <h2 class="text-xl font-semibold">{{ $title }}</h2>
            <h3 class="text-sm font-medium">{{ $subtitle }}</h3>
            <button @click="open = false" class="text-ics-primary-100 hover:text-ics-danger text-xl">&times;</button>
        </div>

        {{-- Body --}}
        <div class="mb-4">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        @isset($footer)
            <div class="flex justify-end gap-2 mt-4">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>


