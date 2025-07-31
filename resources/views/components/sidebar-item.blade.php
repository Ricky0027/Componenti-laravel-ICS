@props([
    'title' => 'Sidebar',
    'items' => []
])

<aside {{ $attributes->merge(['class' => 'w-64 h-screen bg-ics-gray-100 text-white flex flex-col fixed left-0 top-0']) }}>
    <div class="p-6 text-2xl text-ics-primary-100 font-bold ">
        {{ $title }}
    </div>

    <nav class="flex-1 overflow-y-auto p-4 space-y-2">
        @foreach ($items as $item)
            @if (isset($item['children']) && is_array($item['children']))
                <div x-data="{ open: false }" class="text-ics-primary-100">
                    <button @click="open = !open"
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-ics-primary-100 focus:bg-ics-primary-100 focus:text-ics-gray-200 hover:text-ics-gray-200 transition">
                        <span>{{ $item['label'] }}</span>
                        <svg :class="{ 'rotate-90': open }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="open" x-cloak class="pl-6 bg-ics-secondary-200 space-y-1 py-2">
                        @foreach ($item['children'] as $child)
                            <a href="{{ $child['href'] ?? '#' }}"
                               class="block px-2 py-1 text-sm text-ics-primary-100 hover:border-l-4 hover:border-ics-primary-100 font-medium">
                                {{ $child['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                <a href="{{ $item['href'] ?? '#' }}"
                   class="block px-4 py-2 text-ics-primary-100 hover:bg-ics-primary-100 hover:text-ics-gray-200 transition">
                    {{ $item['label'] }}
                </a>
            @endif
        @endforeach
    </nav>
</aside>


