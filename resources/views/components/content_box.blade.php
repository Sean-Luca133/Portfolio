@props([
    'image' => 'placeholder.png',
    'reverse' => null,
    'side_images' => []
])
@php
$reverse_prop = $reverse == null? '': 'flex-row-reverse';

@endphp
<div {{$attributes->merge(["class" => "rounded-lg my-5 bg-sandy-brown-300 border-2 border-black dark:border-white  transition duration-300 "])}}>
    <div class="hover:[&>figure>div>img]:opacity-50 rounded-lg grid grid-cols-7 gap-8 bg-sandy-brown-100 [clip-path:polygon(100%_0%,100%_100%,100%_100%,0%_100%,0%_100%,0%_0%,0%_0%,100%_0%)] hover:[clip-path:polygon(100%_8%,100%_92%,92%_100%,8%_100%,0%_92%,0%_8%,8%_0%,92%_0%)] p-5 transition-all duration-200 {{$reverse_prop}}">
        <figure class="relative flex justify-center items-center md:col-span-2 col-span-7">
            <img class="size-50 " src="/storage/{{$image}}"
                alt="project">
            <div> @foreach($side_images as $side_image)
                    <img
                        class="size-10 opacity-0 hover:opacity-50 absolute bottom-{{$side_image['bottom']??''}} left-{{$side_image['left']??''}} top-{{$side_image['top']??''}} right-{{$side_image['right']??''}} transition-opacity duration-200"
                        src="/storage/{{$side_image['src']}}" alt="{{$side_image['alt']}}">
                @endforeach</div>
        </figure>
        <div class="md:col-span-5 col-span-7">{{$slot}}</div></div>
</div>
