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
        <x-logo class="absolute top-3 left-3"/>

</nav>
