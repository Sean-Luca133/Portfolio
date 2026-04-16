<div
    @php
$skills = ['HTML', 'CSS','JavaScript','PHP', 'Laravel', 'Tailwind', 'Alpine.js','Livewire', 'StarUML', 'Git', 'MySQL', 'Python', 'Java', '.NET', 'React','Qlik'];
$colors = ['bg-sandy-brown-400','bg-light-green-400'];
 @endphp





    {{$attributes->merge(["class"=>"p-1 rounded bg-green-300  border-b-4 border-r-4 border-black dark:border-white transition-all duration-200 size-15"])}} :class="{'!border-2 !border-sandy-brown-300 w-[97vw]':seperate}"
    class="relative ">
    <figure  :class="{'justify-between':seperate}"
             class=" flex gap-0 transition-all delay-500 duration-1000">
        <img @click="seperate=!seperate" class="w-6 cursor-pointer" src="/storage/logo_left.png"/>



{{--       marquee works by making two/three identical list and putting a x-transition animation on the container which holds it. Another div is used to have overflow-hidden on extra elements.
           To get the fade, effect x-effect is used with nextTick which does an action when page is fully loaded (in this case remove opacity-0).
           This was needed because styling it in the span would not transition because it was already loaded with opacity-100 because of x-show
--}}
        <div class="overflow-hidden max-w-[65vw] flex items-center mask-[linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]">

                <div x-cloak x-show="seperate"
                     class="animate-marquee flex gap-6 transition-all duration-500 [&_span]:rounded-xl [&_span]:border-2 [&_span]:border-black [&_span]:dark:border-white [&_span]:p-2 [&_span]:whitespace-nowrap"
                     x-effect="if (seperate){ $nextTick(() => $el.querySelectorAll('span.fade').forEach(s => s.classList.remove('opacity-0')))} else{$el.querySelectorAll('span.fade').forEach(s => s.classList.add('opacity-0'))}
                     ">
                    {{-- First version (for loop to work) --}}
                    @foreach($skills as $index => $skill)
                        <span    class="{{$colors[$index%count($colors)]}} fade opacity-0"  style="transition-delay:24000ms">{{$skill}}</span>
                    @endforeach
                    {{-- second version (main) --}}
                    @foreach($skills as $index => $skill)
                        <span    class="{{$colors[$index%count($colors)]}} fade  opacity-0 transition-opacity duration-500" style="transition-delay: {{ 500 + $index * 800 }}ms">{{$skill}}</span>
                    @endforeach
                    {{-- third version (for loop to work) --}}
                    @foreach($skills as $index => $skill)
                        <span class="{{$colors[$index%count($colors)]}}">{{$skill}}</span>
                    @endforeach
                </div>

        </div>
        <img @click="seperate=!seperate" class="w-6 cursor-pointer" src="/storage/logo_right.png"/></figure>
</div>
