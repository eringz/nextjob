@props(['active' => false])

<button class="{{ $active ? 'pt-7 pb-5 border-b-4 border-[#9BB1F0] transition-colors duration-1000' : 'pt-7 pb-5 hover:border-b-4 hover:border-blue transition-colors duration-1000' }}" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>
    {{ $slot}}
</button>