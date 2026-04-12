<x-layouts.portfolio title="Who am I?">
    <x-slot:top>
        <div class="my-5 mx-auto md:max-w-[65%] max-w-[90%] grid grid-cols-5 gap-4">
            <p class="md:col-span-3 col-span-5 self-center md:text-base text-sm">
                Hi again, on this page, I am going to give you a more detailed look at who I am and why I chose this
                field of
                study in the first place. It will even include some titbits about myself, which will hopefully give a
                better view
                about who I am as a person. So, if you are interested, keep on reading.

            </p>
            <figure class="md:col-span-2 col-span-5 flex justify-center">
                <img class="rounded-lg max-h-100" src="/storage/about_me.png" alt="About me image">
            </figure>
        </div>
    </x-slot:top>


    {{--overflow-x-clip used to not make cards extend the browser viewport when not activated yet--}}
    <div class="overflow-x-clip">
        <div class="my-10"><h2 class="font-header text-2xl">Brief introduction</h2>
            <x-content_box class="[&_p]:my-3" image="logo.png">
                <h1 class="text-center font-header text-xl mb-5">A quick over view of me</h1>

                <p>I am Sean-Luca Jansen, an IT'er who was born in 2006 in Turnhout. Currently am studying applied
                    computer science in Thomas More Geel. </p>

                <p>I am a person who really likes to know how something works when using it. If I don't know it
                    yet, I would look it up because a tool is only useful if you know how to use it. Also, as a person, I
                    really like to look at the details of things. Every detail matters because the more you look at the
                    details the more you show that you care about what you make. When I start coding an application, it should
                    not be
                    satisfactory it should be great. Every aspect should be made as good as it can be in the time I am
                    able to spend on it. </p>
                <p>To conclude my brief intro, I am a motivated IT student who builds applications that show the care I
                    put in it.</p>

            </x-content_box>
        </div>

        <div class="my-10"><h2 class="font-header text-2xl">Why applied computer science?</h2>
            <x-content_box reverse image="it.png" class="[&_p]:my-3">
                <h1 class="text-center font-header text-xl mb-5">From nothing to something (great?)</h1>
                <p>To be totally fair with you, when I was a child, I did not think to myself that I would do IT when I
                    grew up.
                    Actually, I completely did not know what I wanted to do when I graduated high school. When I was
                    purposed options to go study in Thomas More, IT just looked the most appealing.</p>
                <p>When first starting the course, it was immediately obvious that I was entirely new to anything IT
                    related, I didn't even know how to use Paint. But throughout this course, I did notice that I did
                    start to understand how things worked. I saw that programming languages are logically built up, and
                    I love structure and saw that designing things with your own two hands can be really fun (especially
                    front-end design). </p>
                <p> Currently, I feel more comfortable around programming languages that I have already interacted with
                    like Python or Java. Although I don't think that I am currently a great coder (or even a good one),
                    I do think that I learn something every day and can improve because, is that not why we go to
                    school?</p>

            </x-content_box>
        </div>

        <div class="my-10">
            <h2 class="font-header text-2xl">Some interresting facts about me</h2>
            <x-content_box image="scouts.png" class="[&_p]:my-3">
                <h1 class="text-center font-header text-xl mb-5">Scouts, a sparse but great past time</h1>
                <p>I don't really have many hobby's, but for the one hobby I do have it is a great one. During every
                    other weekend, on a Saturday, I go to the
                    <a href="https://www.akabeommekaar.be/" class="font-bold hover:text-sandy-brown-300"
                       target="_blank">Scouts Akabe</a>.
                    It's a Scouts for people who have a mental or physical
                    disability (I have ASS, so I also am included).</p>

                <p>Going to Akabe is made fun by the scout leaders who take the time to listen to their members and the
                    low pressure activities. If I go to Akabe, I don't need to worry about being the best at
                    communicating, which I am not good at but am working on, and can enjoy all the activities from 2 to 5
                    o'clock without stress.</p>

                <p>Before this, I went to a more "normal" (Take these quotes seriously because with or without
                    disability you are normal) scouts, but it was far less fun. Akabe provided me the chance to do scouts
                    activities like going to camp while still providing enough guidance to make the experience fun for
                    me.</p>

                <p>Even though it is a hobby I only do once every other week, it is rewarding experience and helps with
                    not only working for school the entire day</p>

            </x-content_box>

            @php
                $side_images = [
                    [
                        'src' => 'ralsei.png',
                        'alt' => 'side_image',
                        'bottom' => '0',
                        'left' => '10'
                    ],
                    [
                        'src' => 'crustle.png',
                        'alt' => 'side_image',
                        'bottom' => '0',
                        'left' => '75'
                    ]
                    ];
            @endphp
            <x-content_box reverse image="pokemon.png" class="[&_p]:my-3">
                <h1 class="text-center font-header text-xl mb-5">Games, seriously?</h1>
                <p>It might be a cliché that IT students really like video games. How I differ is more how I interact
                    with them. Instead of playing a ton of games, I generally prefer to know a lot about some of them. Some
                    examples of games I really like are Pokémon and Deltarune. </p>

                <p>Did you know that I know all 1025 (add the time of making this website) by heart. If you would
                    show me a picture of a specific pokemon I should be able to correctly name it. Probably what makes
                    these creatures so interesting for me is that they are not just animals with a specific element
                    but creatures that draw their inspiration from the real world.</p>

                <p>What interests me so much about Deltarune is the level of detail that gets put in the game. I once had
                    a moment in the game where I forgot there was a sprint option (because the game releases in chapters
                    with some wait time) and the game called me out for it. Also the music in the game is great. To show
                    it here are some tracks I like in no particular order. </p>

                <x-accordian rounded border title="Tracks" bg_color="green" class="my-5 [&_li]:font-bold [&_li]:text-sm [&_li]:hover:text-sandy-brown-300 [&_li]:transition [&_li]:duration-200">
                    <ul class="list-disc list-inside">
                        <li><a href="https://www.youtube.com/watch?v=jsXXKQ_nl30&list=PLKXdyINOQYsaHwm4rJ0QDFzsaZQNQjF0U&index=77" target="_blank">Air Waves</a></li>
                        <li><a href="https://www.youtube.com/watch?v=9oDZ2vN9XF0&list=PLKXdyINOQYsbroHtsNBW6OJaNZKLh8lf6&index=13" target="_blank">Field of Hopes and Dreams</a></li>
                        <li><a href="https://www.youtube.com/watch?v=ulaTvZ1gSL0&list=PLKXdyINOQYsaHwm4rJ0QDFzsaZQNQjF0U&index=16" target="_blank">Paradise, Paradise</a></li>
                        <li><a href="https://www.youtube.com/watch?v=7f1RK1m7qvc&list=PLKXdyINOQYsaHwm4rJ0QDFzsaZQNQjF0U&index=63" target="_blank">The Third Sanctuary</a></li>
                        <li><a href="https://www.youtube.com/watch?v=RKQUblO-iCs&list=PLKXdyINOQYsbMHB5JF-mqNQOb-8WD0iDq&index=3" target="_blank">My Castle Town</a></li>
                    </ul>
                </x-accordian>
            </x-content_box>
        </div>
    </div>


</x-layouts.portfolio>
