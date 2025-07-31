{{-- <div {{ $attributes->merge( ['class' => 'border border-gray-500 rounded-lg p-6 bg-white']) }}>
    {{ $slot }}
</div> --}}
<div {{ $attributes->merge( ['class' => 'bg-ics-gray-200 p-4 md:p-5 space-y-8 border rounded-md']) }}>
    {{ $slot }}
</div>