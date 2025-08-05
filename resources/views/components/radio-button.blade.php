<div {{ $attributes->merge(['class' => 'flex flex-col gap-2']) }}>
        <p>{{ $label }}:</p>
        <div {{ $attributes->class([
            'flex',
            'flex-col gap-2' => $layout === 'vertical',
            'flex-row gap-4' => $layout === 'horizontal',
        ]) }}>
            @foreach ($options ?? [] as $value => $label)
                @php
                    $id = "{$name}_{$value}";
                @endphp

                {{-- <div class="flex items-center gap-2"> --}}
                <div {{ $attributes->class([
                    'flex items-center gap-2',
                    'cursor-pointer' => $disabled != $value,
                    'opacity-60 cursor-default' => $disabled == $value,
                ]) }}>
                    <input
                            type="radio"
                            name="{{ $name }}"
                            id="{{ $id }}"
                            value="{{ $value }}"
                            class="w-6 h-6 border border-ics-gray-200 bg-ics-gray-200 bg-cover text-ics-primary-100 focus:ring-0 focus:ring-offset-0"
                            @checked($selected == $value)
                            @disabled($disabled == $value)
                    >
                    <label class="block mb-0" for="{{ $id }}">
                        {{ $label }}
                    </label>
                </div>
            @endforeach
        </div>
</div>



