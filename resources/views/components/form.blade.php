{{-- @props(['id', 'action', 'method', 'enctype' => 'POST'])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{ $attributes->merge(['class' => 'flex flex-col gap-8']) }}>
    @csrf
    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}

    <div class="pt-4">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            {{ $buttonLabel ?? 'Invia' }}
        </button>
    </div>
</form> --}}

@props(['id', 'action', 'method', 'enctype' => ''])
<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{ $attributes->merge(['class' => 'flex flex-col gap-8']) }}>
    @csrf
    @if (!in_array($method, ['GET', 'POST']))
    @method($method)
    @endif

    {{ $slot }}
    
    <div class="pt-5">
        <button type="submit" class="bg-ics-primary-100 rounded-lg text-white w-20 h-10">Salva</button>
    </div>
</form>