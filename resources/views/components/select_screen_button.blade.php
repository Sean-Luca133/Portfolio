@props([
    'selected_project' => 0,
    'image' => 'placeholder.png',
    'name' => 'Placeholder'
])

<div @click="selected_project={{$selected_project}}"
     class="cursor-pointer flex justify-center items-center border-black border-2 hover:bg-sandy-brown-300 transition duration-200">
    <div
        class="relative my-3 md:size-50 size-25 border-2 border-black rounded-lg shadow-[2px_2px_0_#111] hover:[&_div]:opacity-100 hover:translate-y-1 hover:shadow-none transition duration-500">
        <img class="rounded-lg"
            src="/storage/projects/{{$image}}" alt="Select screen image">
        <div class="bg-black/50 md:size-50 size-25 absolute top-0 rounded-lg opacity-0 transition duration-200 flex justify-center items-center">
            <p class="font-bold md:text-base text-xs text-white text-center">
                {{$name}}</p>
        </div>

    </div>

</div>
