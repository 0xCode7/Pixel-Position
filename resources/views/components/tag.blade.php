@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 font-bold rounded-lg transition-colors duration-300 py-1';
    if ($size === 'base') {
        $classes .= ' px-5 text-sm';
    }
    if ($size === 'small') {
        $classes .= ' px-3 text-2xs';
    }
@endphp


<a class="{{ $classes }}" href="/tags/{{strtolower($tag->name)}}">{{ $tag->name }}</a>
