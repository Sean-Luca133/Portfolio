<div
    @php
$skills = ['HTML', 'CSS','JavaScript','PHP', 'Laravel', 'Tailwind', 'Alpine.js', 'Git', 'MySQL', 'Python', 'Java', '.NET', 'React','Qlik'];
$colors = ['bg-sandy-brown-400','bg-light-green-400'];
 @endphp





    {{$attributes->merge(["class"=>"p-1 rounded bg-green-300  border-b-4 border-r-4 border-black dark:border-white transition-all duration-200 size-15"])}} :class="{'!border-2 !border-sandy-brown-300 w-[97vw]':seperate}"
    x-data="{seperate:false}" class="relative ">
    <figure  :class="{'justify-between':seperate}"
             class=" flex gap-0 transition-all delay-500 duration-1000">
        <img @click="seperate=!seperate" class="w-6 cursor-pointer" src="/storage/logo_left.png"/>
        <div class="overflow-hidden max-w-[65vw] flex items-center">

                <div x-cloak x-show="seperate"
                     class="animate-marquee flex gap-6 transition-all duration-500 [&_span]:transition [&_span]:duration-500 [&_span]:delay-2000"
                     x-effect="if (seperate){ $nextTick(() => $el.querySelectorAll('span.fade').forEach(s => s.classList.remove('opacity-0')))} else{$el.querySelectorAll('span.fade').forEach(s => s.classList.add('opacity-0'))}
                     ">
                    {{-- First version --}}
                    @foreach($skills as $index => $skill)
                        <span    class="{{$colors[$index%count($colors)]}} fade rounded-xl border-2 border-black dark:border-white p-2 whitespace-nowrap opacity-0"  style="transition-delay:24000ms">{{$skill}}</span>
                    @endforeach
                    {{-- second version --}}
                    @foreach($skills as $index => $skill)
                        <span    class="{{$colors[$index%count($colors)]}} fade rounded-xl border-2 border-black dark:border-white p-2 whitespace-nowrap opacity-0 transition-opacity duration-500 delay-[]" style="transition-delay: {{ 500 + $index * 800 }}ms">{{$skill}}</span>
                    @endforeach
                    {{-- third version for loop to work --}}
                    @foreach($skills as $index => $skill)
                        <span class="{{$colors[$index%count($colors)]}} rounded-xl border-2 border-black dark:border-white p-2 whitespace-nowrap">{{$skill}}</span>
                    @endforeach
                </div>

        </div>
        <img @click="seperate=!seperate" class="w-6 cursor-pointer" src="/storage/logo_right.png"/></figure>
</div>
