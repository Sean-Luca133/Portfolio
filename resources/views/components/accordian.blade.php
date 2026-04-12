@props([
    'title' => Null,
    'bg_color' => '',
    'border' => false,
    'rounded' => false,
])

@php
    // Set color classes
    match($bg_color){
        'blue' => $color = 'bg-blue-50 dark:bg-blue-900/50',
        'red' => $color = 'bg-red-50 dark:bg-red-900/50',
        'green' => $color = 'bg-light-green-100 dark:bg-light-green-900/50',
        'yellow' => $color = 'bg-yellow-50 dark:bg-yellow-900/50',
        'gray' => $color = 'bg-gray-50 dark:bg-gray-900/50',
        'cyan' => $color= 'bg-cyan-50 dark:bg-cyan-900/50',
        'white' => $color = 'bg-white dark:bg-zinc-900/50',
        'black' => $color = 'bg-black/5 dark:bg-white/5',
        default => $color = 'bg-white dark:bg-zinc-900/50',
    };

    // Set border class
    if($border) {
        $border='border-2 border-black dark:border-white' ?? '';
    };

    // Set rounded class
    if($rounded) {
        $rounded = 'rounded-lg' ?? '';
    };
@endphp
<div x-data="{ open: false }" {{$attributes->merge(['class' => "w-full $rounded $border $color my-5"])}}  x-cloak>
    <button @click="open = !open" class="w-full flex justify-between items-center p-4 focus:outline-none cursor-pointer">
        <span class="font-semibold text-left">{{ $title }}</span>
        <svg :class="{'transform rotate-180': open }" class="size-6 w-5 h-5 :rotate-180 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

    </button>
    <div x-show="open" x-transition.duration.200ms class="p-4 border-t border-gray-300 dark:border-gray-700">
        {{ $slot }}
    </div>

</div>
