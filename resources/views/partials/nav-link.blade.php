@props(['active'=> false])

@php
    $classes = ($active ?? false)
                ?'text-red-300'
                :'text-blue-300'
@endphp

<li>
    <a {{ $attributes->merge(['class'=> $classes])}}>{{$slot}}</a>
 </li>