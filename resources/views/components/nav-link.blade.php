@props(['active' => false])

<a class="{{ $active ? 'text-blue pt-7 pb-5 border-b-2 border-blue transition-colors duration-1000' : 'pt-7 pb-5 hover:border-b-2 hover:border-blue transition-colors duration-1000' }}" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>
    {{ $slot}}
</a>


 
{{-- 'class' => 'text-black/4 pt-7 pb-5 hover:border-b-4 hover:border-blue transition-colors duration-1000' --}}