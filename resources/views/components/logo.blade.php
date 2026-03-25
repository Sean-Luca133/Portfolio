<div {{$attributes->merge(["class"=>""])}} x-data="{seperate:false}" class="relative ">
    <figure @mouseenter="seperate=true" @mouseleave="seperate=false" :class="{'!gap-4 !border-2 !border-sandy-brown-300':seperate}" class="cursor-pointer flex p-1 rounded bg-green-300  border-b-4 border-r-4 border-black dark:border-white gap-0 transition-all duration-200">
        <img class="w-6" src="/storage/logo_left.png"/>
        <img class="w-6" src="/storage/logo_right.png"/></figure>
</div>
