@props([
    'image' => 'placeholder.png',
    'reverse' => null,
])
@php
$reverse_prop = $reverse == null? '': 'flex-row-reverse'
@endphp
<div {{$attributes->merge(["class" => "rounded bg-sandy-brown-100 hover:bg-black my-5 border-2 border-black dark:border-white flex gap-8 transition duration-300 $reverse_prop"])}}>
    <div class="bg-sandy-brown-100 relative [clip-path:polygon(100%_5%,100%_95%,95%_100%,5%_100%,0%_95%,0%_5%,5%_0%,95%_0%)] p-5">
        <img class="size-50 " src="/storage/{{$image}}" alt="project">
        <p>{{$slot}}</p></div>
</div>
