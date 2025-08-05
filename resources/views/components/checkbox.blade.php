

@php
    $hasError = $errors->has($name);
@endphp

<div {{ $attributes->merge(['class' => '']) }}>
    
    <label for="{{ $id }}" {{ 
        $attributes->class([
            'flex items-center gap-2',
            'cursor-pointer' => !$disabled,
            'opacity-60 cursor-default' => $disabled,
        ]) 
    }}>
        <input
            type="checkbox"
            id="{{ $id }}"
            name="{{ $name }}"
            value="{{ $value }}"
            @checked($checked)
            class="hidden peer"
            @if($disabled) disabled @endif
        />
        
        <!-- Stato non selezionato -->
        <div class="w-6 h-6 border border-ics-gray-200 rounded-md bg-ics-gray-200 peer-checked:hidden"></div>

        <!-- Stato selezionato -->
        <div class="w-6 h-6 hidden items-center justify-center border border-ics-gray-200 rounded-md bg-ics-gray-200 peer-checked:flex">
            <i class="fa-solid fa-check"></i>
        </div>

        <span>{{ $label }}</span>
    </label>

    @if ($hasError)
        <p class="mt-1 text-sm text-red-600">
            {{ $errors->first($name) }}
        </p>
    @endif
</div>
