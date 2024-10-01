@php
    $Classes = "section__Item
                        bg-white/5 border border-transparent rounded-xl p-6 mx-2 hover:cursor-pointer flex
                        hover:border-navhover hover:scale-110 hover:shadow-lg transition-all duration-300 group";
@endphp
<div
    {{ $attributes(['class' => $Classes]) }}>
    {{$slot}}
</div>
