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
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div @click.away="open = false" class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        {{-- Header --}}
        <div class="pb-2 mb-4">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-xl font-bold text-ics-primary-100">{{ $title }}</h2>
                    <h3 class="text-sm font-medium text-ics-primary-100 mt-1">{{ $subtitle }}</h3>
                </div>
                <button @click="open = false" class="text-md btn-out w-8 h-8 btn-out-primary rounded-full hover:btn-primary-100">&times;</button>
            </div>
        </div>

        {{-- Body --}}
        <div class="mb-4 font-regular text-ics-primary-100">
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


