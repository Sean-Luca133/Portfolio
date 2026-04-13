@props(
    [
        'show_number' => 0,
        'image' => 'placeholder.png',
        'link' => '#'
    ]

)
<div x-cloak x-show="selected_project=={{$show_number}}" x-transition.duration.500ms x-transition.delay.500ms>
    <div class="grid grid-cols-7 gap-8">
        <figure class="md:col-span-2 col-span-7 flex justify-center items-center">

            <a href="{{$link}}" target="_blank"><img class="border-2 border-black rounded-lg"
                                                     src="/storage/projects/{{$image}}"
                                                     alt="detail project view image"></a>
        </figure>
        <div class="md:col-span-5 col-span-7 flex flex-col mt-5">
            <p><span class="font-bold">Summary: </span>{{$summary}}</p>
            <p><span class="font-bold">What I learned: </span>{{$learned}}</p>
            <p><span class="font-bold">Who contributed?: </span>{{$contributers}}</p>
        </div>
    </div>
</div>
