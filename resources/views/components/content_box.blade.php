@props([
    'image' => 'placeholder.png',
    'reverse' => null,
])
@php
$reverse_prop = $reverse == null? '': 'flex-row-reverse'
@endphp
<div {{$attributes->merge(["class" => "rounded-lg my-5 bg-sandy-brown-300 border-2 border-black dark:border-white  transition duration-300 "])}}>
    <div class="rounded-lg flex gap-8 bg-sandy-brown-100 relative [clip-path:polygon(100%_0%,100%_100%,100%_100%,0%_100%,0%_100%,0%_0%,0%_0%,100%_0%)] hover:[clip-path:polygon(100%_8%,100%_92%,92%_100%,8%_100%,0%_92%,0%_8%,8%_0%,92%_0%)] p-5 transition-all duration-200 {{$reverse_prop}}">
        <img class="size-50 " src="/storage/{{$image}}" alt="project">
        <p>{{$slot}}</p></div>
</div>
