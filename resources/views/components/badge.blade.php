@props([
    'type' => '', 
    'rounded' => true,
])

@php
    $base = 'inline-block text-md font-semibold px-2 py-1';
    $colors = [
        'primary' => 'bg-ics-primary-100 text-white',
        'secondary' => 'bg-ics-secondary-200 text-ics-primary-100',
        'success' => 'bg-ics-success-100 text-white',
        'warning' => 'bg-ics-warning-100 text-white',
        'danger' => 'bg-ics-danger-100 text-white',
    ];
    $rounded = 'rounded';
@endphp

<span {{ $attributes->merge(['class' => "$base " . (isset($colors[$type]) ? $colors[$type] : $colors['primary']) . " $rounded"]) }}>
    {{ $slot }}
</span>
