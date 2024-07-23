@props(['label', 'name'])

@php
    $defaults = [
        'type'              => 'text',
        'id'                => $name,
        'name'              => $name,
        'class'             => '',
        'value'             => old($name)
    ]
@endphp         

<x-forms.field>
    <input {{ attributes($defaults) }}>
</x-forms.field>
