@props(['active' => false])

<a class="{{ $active ? ' pt-7 pb-5 border-b-2 border-blue transition-colors duration-1000' : 'pt-7 pb-5 hover:border-b-2 hover:border-blue transition-colors duration-1000' }}" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>
    {{ $slot}}
</a>
