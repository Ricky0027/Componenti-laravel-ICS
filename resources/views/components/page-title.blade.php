{{-- <div {{ $attributes->merge(['class' => 'w-full h-1/2']) }}>
    {{ $slot }}
</div> --}}

<div {{ $attributes->merge(['class' => 'pb-2 mb-6 text-2xl font-medium']) }}>
    {{ $slot }}
</div>