@props([
    'tabs' => [],  
    'active' => '', 
])

<div x-data="{ activeTab: '{{ $active ?: array_values($tabs)[0] }}' }" class="w-full">
    <!-- Tab Headers -->
    <div class="flex space-x-4">
        @foreach ($tabs as $label => $id)
            <button
                @click="activeTab = '{{ $id }}'"
                class="px-20 py-2 border-t border-l border-r rounded-t-lg font-medium transition-all"
                :class="activeTab === '{{ $id }}'
                    ? 'bg-white text-ics-primary-100'
                    : 'bg-ics-secondary-200 text-ics-primary-100 hover:bg-ics-secondary-300'"
            >
                {{ $label }}
            </button>
        @endforeach
    </div>

    <!-- Tab Content -->
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
