@props([
    'links' => []
])
@php
$current = basename($_SERVER['REQUEST_URI']);

@endphp

<nav class="z-10 h-28 bg-granite-600 relative  sticky top-0 border-b-2 border-black dark:border-white mb-5">

        <ul class=" flex justify-center absolute -bottom-5 left-2 [&_li]:text-sm [&_li]:md:text-base [&_li]:p-2 [&_li]:font-bold [&_li]:font-header [&_li]:bg-dusty-olive-300 [&_li]:border-y-2 [&_li]:border-black dark:[&_li]:border-white ">
            <li class="{{$current == ''? '!bg-orange-300':''}} rounded-s border-s-2"><a href="{{route('home')}}" >Welkom</a></li>
            <li class="{{$current == 'about_me'? '!bg-orange-300':''}}"><a href="{{route('about_me')}}">About me</a></li>
            <li class="{{$current == 'projects'? '!bg-orange-300':''}}"><a href="{{route('projects')}}">Projects</a></li>
            <li class="{{$current == 'cv'? '!bg-orange-300':''}} rounded-e border-e-2"><a href="{{route('cv')}}">Cv</a></li>
        </ul>
    <div class="absolute top-3 left-3">

        <div x-cloak x-data="{check:false,seperate:false}" class="relative">
            <x-logo  @mouseenter="check= true" @mouseleave="check=false"
            />
            <div x-cloak x-show="check && !seperate" x-transition.duration.500ms class="rounded-lg text-sm w-45 bg-granite-300 p-2 border-2 border-black dark:border-white absolute -bottom-10">
                <p>Want to see my skills?</p>
            </div>
        </div>
    </div>

</nav>
