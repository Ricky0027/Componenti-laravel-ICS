@props([
    'headers' => [], 
    'striped' => false,
])

<table {{ $attributes->merge(['class' => 'w-full table-auto']) }}>
    <thead class="bg-ics-secondary-100 text-ics-primary-100">
        <tr>
            @foreach ($headers as $header)
                 <th class="px-4 py-2 text-left border-b border-ics-primary-100 {{ !$loop->last ? 'border-r border-ics-primary-100' : '' }}">
                    {{ $header }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="text-sm font-regular text-ics-primary-100">
        {{ $slot }}
    </tbody>
</table>
