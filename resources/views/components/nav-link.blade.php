@props(['active'])

@php

$classes = ($active ?? false)
            ? 'bg-gray-800 text-white'
            : 'text-gray-400 hover:text-white hover:bg-gray-800';
@endphp

<a wire:navigation {{ $attributes->merge(['class' => 'block group w-full flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold ' . $classes]) }}>
    {{ $slot }}
</a>
