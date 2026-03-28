<x-layouts.portfolio title="Welcome">

    {{-- Opening box--}}
    <x-slot:top>
        <div
            class="mx-5 grid grid-cols-7 border-2 border-black rounded-lg bg-light-green-100 overflow-hidden mb-6 hover:outline-2 hover:outline-sandy-brown-300 transition duration-200">

            <div
                class="lg:col-span-2 col-span-7 border-b-2 lg:border-b-0 lg:border-r-2 border-black bg-light-green-200 flex flex-col items-center justify-center gap-4 p-8">

                <div x-cloak class="relative" x-data="{show_stripe:false}">
                    <img x-show="show_stripe" x-transition.duration.500ms src="/storage/click_small.png"
                         class="absolute size-20 rotate-45 -top-10 left-35"
                         alt="stripe_effect">
                    <img x-show="show_stripe" x-transition.duration.500ms src="/storage/click_small.png"
                         class="absolute size-20 -rotate-45 -top-10 -left-7"
                         alt="stripe_effect">

                    <div class="size-48 rounded-full border-2 border-black overflow-hidden bg-granite-800">
                        <figure class="col-span-2 flex justify-center items-center">
                            <div class="relative bg-black/50">


                                {{--  How does the shine work? first define a linear gradient which uses white (could be any color). Then define the size of the background. [400%,100%] means take 400% of x and 100% of y.This is followed by setting the background position to 200% past the container. This is done because after hover we set it to 100% before the container creating a gradient effect. The degree and position of the background decide the dirrection of the shine           --}}
                                <div @mouseenter="show_stripe=true"
                                     @mouseleave="show_stripe=false"
                                     class="inset-0 absolute rounded-full border-black border-2 bg-[linear-gradient(45deg,transparent_25%,rgba(222,222,222,.3)_50%,rgba(222,222,222,.8)_75%,transparent_25%,transparent_100%)] overflow-hidden bg-size-[400%_100%,100%_100%] bg-position-[200%_0,0_0] bg-no-repeat  hover:transition-[background-position_0s_ease] hover:bg-position-[-100%_0,0_0] hover:duration-2000">
                                </div>
                                <img
                                    src="/storage/intro_image.jpg" alt="Start_image"/></div>

                        </figure>
                    </div>
                </div>

            </div>

            <div class="col-span-5 p-8 flex flex-col justify-center gap-4">
                <p class="font-bold font-main text-lime-cream-700 uppercase">// welkom</p>
                <h2 class="font-header text-3xl text-black">Hi, and welcome to my<br/><span class="hover:text-sandy-brown-300 transition duration-200">Portfolio </span></h2>
                <p class="text-xs font-main text-granite-800">
                    I'm a developer who builds clean, thoughtful web applications.
                    I love turning ideas into real, working products — from solid backend logic to polished
                    frontends.<br><br>
                    Have a look around and see what I've been up to.
                </p>
            </div>
        </div>
    </x-slot:top>

    {{-- Explore label --}}
    <p class="text-lg font-main  text-dusty-olive-500 uppercase mb-3">Where to Explore?</p>

    {{-- Intro cards --}}
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 my-8">

        <x-intro_card title="About me" description="Who I am, where I come from, and what drives me to keep building things." route="about_me" bg_color="bg-sandy-brown-100" footer_color="bg-sandy-brown-200 hover:bg-sandy-brown-300" label="GET TO KNOW ME"/>
        <x-intro_card title="Projects" description="A collection of things I've built — side projects, experiments and real work." route="projects" bg_color="bg-lime-cream-100" footer_color="bg-lime-cream-200 hover:bg-lime-cream-300" label="SEE MY WORK"/>
        <x-intro_card title="Cv" description="My education, experience, and skills — the full picture in one place." route="cv" bg_color="bg-granite-100" footer_color="bg-granite-200 hover:bg-granite-300" label="VIEW CV"/>

    </div>

</x-layouts.portfolio>
