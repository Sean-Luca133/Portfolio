@props(
    [
        'show_number' => 0,
        'individual' => null,
        'image' => 'placeholder.png',
        'date' => 'Date not specified',
        'link' => '#'
    ]

)


<div x-cloak x-show="selected_project=={{$show_number}}" x-transition.duration.500ms x-transition.delay.500ms>
    <div class="grid grid-cols-7">
        <figure class="md:col-span-2 col-span-7 flex justify-center items-center p-5 p-r-10 bg-lime-cream-50">

            <div class="relative hover:[&_div]:opacity-100 hover:[&_div]:transition hover:[&_div]:duration-200ms">
                @if($link != "#")
                    <a href="{{$link}}" target="_blank"><img class="border-2 border-black rounded-lg"
                                                             src="/storage/projects/{{$image}}"
                                                             alt="detail project view image">


                        <div
                            class="absolute inset-0 opacity-0 rounded-lg text-xl bg-black/50 flex justify-center items-center text-white">
                            View
                        </div>
                        @else
                            <img class="border-2 border-black rounded-lg"
                                 src="/storage/projects/{{$image}}"
                                 alt="detail project view image">
                        @endif
                    </a>
            </div>

        </figure>
        <div
            class="md:col-span-5 col-span-7 flex flex-col gap-4 [&_p]:p-3 md:border-t-none md:border-l border-t border-black">


            <div class="flex flex-col">
                <h2 class="text-3xl text-center bold-font p-3 hover:text-sandy-brown-800 transition- duration-200ms">{{$name}}</h2>
                <div class="flex justify-center gap-2">
                    @if($individual)
                        <p class=" text-xs font-bold bg-sandy-brown-300 hover:bg-sandy-brown-800 text-sandy-brown-800 hover:text-sandy-brown-300 rounded-full px-2 py-1 border-2 border-black transition duration-200">
                            Individual project
                        </p>
                    @else
                        <p class="text-xs font-bold bg-lime-300 hover:bg-lime-800 text-lime-800 hover:text-lime-300 rounded-full px-2 py-1 border-2 border-black transition duration-200">
                            Group project
                        </p>
                    @endif
                    <p class="text-xs font-bold bg-granite-300 hover:bg-granite-800 text-granite-800 hover:text-granite-300 rounded-full px-2 py-1 border-2 border-black transition duration-200">
                        {{$date}}
                    </p>
                </div>
            </div>
            <div
                class=" flex flex-col lg:[&_p]:text-base md:[&_p]:text-sm [&_p]:pb-5 [&_p]:border-t [&_p]:border-black [&_p]:hover:bg-sandy-brown-300 [&_p]:transition [&_p]:duration-200ms">
                <p><span class="font-bold">Summary: </span>{{$summary}}</p>
                <p><span
                        class="font-bold">{{$individual? "What does it contain?:":"What I contributed?:"}} </span>{{$contributed}}
                </p>
                <p><span class="font-bold">What I learned: </span>{{$learned}}</p></div>

        </div>
    </div>
</div>
