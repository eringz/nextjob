<form {{ $attributes(['class'=>'', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @carf
        @mathod($attributes->get('method'))
    @endif
    {{ $slot }}
</form>