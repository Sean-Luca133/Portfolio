<x-layouts.portfolio title="Welcome">

    {{-- Opening box--}}
    <x-slot:top>
        <div
            class="md:mx-5 mx-2 grid grid-cols-7 border-2 border-black rounded-lg bg-light-green-100 overflow-hidden mb-6 hover:outline-2 hover:outline-sandy-brown-300 transition duration-200">

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

            <div class="lg:col-span-5 col-span-7 p-8 flex flex-col justify-center gap-4">
                <h2 class="font-header text-3xl text-black">Hi, and welcome to my<br/><span
                        class="hover:text-sandy-brown-300 transition duration-200">Portfolio </span></h2>
                <p class="text-sm font-main text-granite-800">
                    This is my online website used as a portfolio. It contains all that you need to know about me. From
                    how I really like to look at the small details of layouts or functionality of an application, to my
                    current skills, which are still improving to this day. So, if you need someone who enjoys looking at
                    The details and wants an end result to be better than good, then you have landed on the right
                    URL.
                </p>
                <p class="text-sm font-main text-granite-800">To be more specific, you can find (even more) information
                    about me on the <b>About me</b> page. If you're interested in my projects, you should check out the
                    <b>Projects</b> page. Lastly, if in need of a fast overview of my education/skills, take a look at
                    the <b>Cv</b> page.
                </p>
                <p class="text-sm font-main text-granite-800">So, have a look around and see what you might find.</p>

            </div>
        </div>
    </x-slot:top>

    {{-- Explore label --}}
    <p class="text-lg font-main  text-dusty-olive-500 uppercase mb-3">Where to Explore to?</p>

    {{-- Intro cards --}}
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 my-8">

        <x-intro_card title="About me"

                      route="about_me" bg_color="bg-sandy-brown-100"
                      footer_color="bg-sandy-brown-200 hover:bg-sandy-brown-300" label="GET TO KNOW ME">
            If you want to know me better, this is a great place to start. A little bit of background information is
            always nice to have.
        </x-intro_card>
        <x-intro_card title="Projects"
                      route="projects" bg_color="bg-lime-cream-100"
                      footer_color="bg-lime-cream-200 hover:bg-lime-cream-300" label="SEE MY PROJECTS">
            Interested in what I have already made and am currently working on? This page gives you a selection of some
            projects I have worked on.
        </x-intro_card>
        <x-intro_card class="lg:col-span-1 md:col-span-2" title="Cv"
                      route="cv" bg_color="bg-granite-100" footer_color="bg-granite-200 hover:bg-granite-300"
                      label="VIEW CV">
            In a rush to see my skills and education? Take a look at this page where my CV is shown on full display.
        </x-intro_card>

    </div>

</x-layouts.portfolio>
