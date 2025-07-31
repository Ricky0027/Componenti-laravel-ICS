{{-- <div {{ $attributes->merge( ['class' => 'border border-gray-500 rounded-lg p-6 bg-white']) }}>
    {{ $slot }}
</div> --}}
@props([
    'title' => null,
])


<div {{ $attributes->merge( ['class' => 'bg-ics-gray-100 p-4 md:p-5 space-y-8 border rounded-md']) }}>
    @if ($title)
        <h2 class="text-normal">
            {{ $title }}
        </h2>
    @endif
    {{ $slot }}
</div>