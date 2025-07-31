<button {{ $attributes->merge(['type' => $attributes->get('type', 'button'),'class' => 'btn']) }}>
    {{ $slot }}
</button>