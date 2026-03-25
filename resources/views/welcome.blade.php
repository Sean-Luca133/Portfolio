<x-layouts.portfolio title="Welcome to my portfolio">

    {{-- Hero --}}
    <div class="grid grid-cols-[200px_1fr] border-2 border-black rounded-lg bg-lime-cream-100 overflow-hidden mb-6">

        <div class="border-r-2 border-black bg-lime-cream-200 flex flex-col items-center justify-center gap-4 p-8">
            <div class="w-28 h-28 rounded-full border-2 border-black overflow-hidden bg-granite-800">
                <figure x-cloak class="col-span-2 flex justify-center items-center">
                    {{--  How does the shine work? first define a linear gradient which uses white (could be any color). Then define the size of the background. [400%,100%] means take 400% of x and 100% of y.This is followed by setting the background position to 200% past the container. This is done because after hover we set it to 100% before the container creating a gradient effect. The degree and position of the background decide the dirrection of the shine           --}}
                    <div x-data="{show_stripe:false}" class="relative">
                        <img x-cloak x-show="show_stripe" x-transition.duration.500ms src="/storage/click_small.png"
                             class="absolute size-20 rotate-45 -top-8 left-40"
                             alt="stripe_effect">
                        <img x-cloak x-show="show_stripe" x-transition.duration.500ms src="/storage/click_small.png"
                             class="absolute size-20 -rotate-45 -top-8 -left-10"
                             alt="stripe_effect">

                        <div @mouseenter="show_stripe=true" @mouseleave="show_stripe=false"
                             class="bg-black/50 rounded-full border-black border-2 bg-[linear-gradient(45deg,transparent_25%,rgba(222,222,222,.3)_50%,rgba(222,222,222,.8)_75%,transparent_25%,transparent_100%)] overflow-hidden bg-size-[400%_100%,100%_100%] bg-position-[200%_0,0_0] bg-no-repeat  hover:transition-[background-position_0s_ease] hover:bg-position-[-100%_0,0_0] hover:duration-1500">

                            <img
                                class=""
                                src="/storage/placeholder.png" alt="Start_image"></div>
                    </div>
                </figure>
            </div>
            <div class="flex gap-1 flex-wrap justify-center">
                @foreach(['Laravel','PHP','Alpine.js','Tailwind'] as $tech)
                    <span class="text-[9px] font-bold px-2 py-0.5 bg-black text-lime-cream-100 rounded-sm font-main tracking-wide">{{ $tech }}</span>
                @endforeach
            </div>
        </div>

        <div class="p-8 flex flex-col justify-center gap-4">
            <p class="text-[10px] font-bold font-main tracking-[0.14em] text-lime-cream-700 uppercase">// welkom</p>
            <h2 class="font-header text-3xl leading-tight text-black">Hey, I'm<br>[Your Name].</h2>
            <p class="text-xs font-main leading-[1.9] text-granite-800">
                I'm a developer who builds clean, thoughtful web applications.
                I love turning ideas into real, working products — from solid backend logic to polished frontends.<br><br>
                Have a look around and see what I've been up to.
            </p>
            <div class="flex gap-3 flex-wrap">
                <a href="{{ route('projects') }}" class="font-main text-[11px] font-bold px-5 py-2 bg-black text-lime-cream-100 border-2 border-black rounded hover:bg-dusty-olive-700 transition">explore_projects →</a>
                <a href="{{ route('about_me') }}" class="font-main text-[11px] font-bold px-5 py-2 bg-transparent text-black border-2 border-black rounded hover:bg-lime-cream-200 transition">about_me</a>
            </div>
        </div>
    </div>

    {{-- Explore label --}}
    <p class="text-[10px] font-bold font-main tracking-[0.16em] text-dusty-olive-500 uppercase mb-3">// explore</p>

    {{-- Nav Cards --}}
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
        @foreach([
          ['title'=>'about_me','desc'=>'Who I am, where I come from, and what drives me to keep building things.','route'=>'about_me','bg'=>'bg-sandy-brown-100','foot'=>'bg-sandy-brown-200','label'=>'GET TO KNOW ME'],
          ['title'=>'projects','desc'=>"A collection of things I've built — side projects, experiments and real work.",'route'=>'projects','bg'=>'bg-light-green-100','foot'=>'bg-light-green-200','label'=>'SEE MY WORK'],
          ['title'=>'cv','desc'=>'My education, experience, and skills — the full picture in one place.','route'=>'cv','bg'=>'bg-granite-100','foot'=>'bg-granite-200','label'=>'VIEW CV'],
        ] as $card)


                <div class="{{ $card['bg'] }} flex-1 p-5 flex flex-col gap-3">
                    <p class="font-header text-lg text-black">{{ $card['title'] }}</p>
                    <p class="text-[11px] font-main leading-[1.75] text-gray-600">{{ $card['desc'] }}</p>
                </div>
            <a href="{{ route($card['route']) }}" class="border-2 border-black rounded-lg flex flex-col no-underline hover:-translate-y-1 hover:shadow-[5px_5px_0_#111] transition-all duration-150">
                <div class="{{ $card['foot'] }} border-t-2 border-black px-5 py-2 flex justify-between items-center">
                    <span class="text-[10px] font-bold font-main tracking-widest">{{ $card['label'] }}</span>
                    <span class="font-bold text-base">→</span>
                </div>
            </a>
        @endforeach
    </div>

</x-layouts.portfolio>
