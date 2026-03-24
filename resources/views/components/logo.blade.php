<div {{$attributes->merge(["class"=>""])}} x-data="{show_animation:false}" class="relative">
    <figure @mouseenter="show_animation=true" class="flex gap-4 p-1 transition-all duration-200" :class="{'rounded bg-green-300 border-2 border-black dark:border-white !gap-0':show_animation}">
        <img class="w-6" src="/storage/logo_left.png"/>
        <img class="w-6" src="/storage/logo_right.png"/></figure>
</div>
