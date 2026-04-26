<x-layouts.portfolio title="What have I made?">
    <x-slot:top>
        <div class="my-5 mx-auto md:max-w-[65%] max-w-[90%] grid grid-cols-5 gap-4">
            <p class="md:col-span-3 col-span-5 self-center md:text-base text-sm">
                This page is all about the projects/achievements that I have made/done during my time at Thomas More.
                There arranged like a menu and sorted chronologically, so pick the ones that look most interesting to
                you.
                Every project shows what it is about and what I have learned from it.

            </p>
            <figure class="md:col-span-2 col-span-5 flex justify-center">
                <img class="rounded-lg max-h-100" src="/storage/about_me.png" alt="About me image">
            </figure>
        </div>
    </x-slot:top>

    <div x-data="{selected_project:0}"
         class="md:mx-5 mx-2 border-2 border-black rounded-t-lg bg-lime-cream-100 mb-6 transition duration-200 flex flex-col">
        <div class="bg-lime-cream-200 block rounded-t-lg border-b border-black">
            <p class="font-bold font-header text-lg text-center py-3"
               x-text="selected_project == 0? 'Select your project to view.': 'Viewing details'"></p>
        </div>
        <div class="grid transition-all duration-1000 transform"
             :class="{'rotate-y-360 perspective-1000':selected_project!=0}">
            {{-- selection menu --}}
            <div x-show="selected_project==0" x-transition.duration.500ms x-transition.delay.500ms
                 class="col-start-1 row-start-1 grid grid-cols-3 justify-center"
            >
                <x-select_screen_button selected_project="1" image="poutrel_logo.png" name="Poutrel"/>
                <x-select_screen_button selected_project="2" image="kvv_rauw.png" name="Kvv Rauw sport mol"/>
                <x-select_screen_button selected_project="3" image="deltafan_logo.png" name="Delta fan"/>
                <x-select_screen_button selected_project="4"/>
                <x-select_screen_button selected_project="5" image="pokelab_logo.png" name="Pokélab"/>
                <x-select_screen_button selected_project="6" image="accurate_pokedex.png" name="Accurate* pokedex"/>
            </div>
            {{-- detail menu --}}
            <div class="col-start-1 row-start-1" x-show="selected_project!=0" x-transition.duration.500ms
                 x-transition.delay.500ms>
                <div class="relative">
                    <div class="absolute top-1 right-1 cursor-pointer" @click="selected_project=0"><i
                            class="fa-solid fa-x"></i></div>

                    <x-detail_menu show_number="1" image="poutrel_view.png" date="Semester 2, 2025-2026">
                        <x-slot:name>Poutrel</x-slot:name>
                        <x-slot:summary>
                            This project was made for the second semester of Skills Integration Lab 2. In it I together
                            with the rest of my group had to build a Laravel php web application for a client, Poutrel a
                            fitness
                            studio. To make
                            this possible we worked with the Scum methodology, using Jira as our ticketing system.
                        </x-slot:summary>
                        <x-slot:contributed>The biggest functionalities I realisted were the pages that allowed te user
                            to order and pay
                            for lessons on the web application. Smaller things I made were the dashboard for the
                            customer and one of the CRUD pages used by the administrator. Also during the project I took
                            the roll of scrum master to keep the team on track during the stand-up meetings.
                        </x-slot:contributed>
                        <x-slot:learned>Because it is groups work, I of course learned to work better in group. I also
                            learned to work with the scrum methodology and working with a client. Things I have already
                            done in other projects but could now reïnforce. Lastly, I learned some new things about what
                            you could do with Laravel, like payment pages with stripe or sending custom markdown mails.
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="2" image="kvv_rauw_view.png" date="Semester 1, 2025-2026">
                        <x-slot:name>KVV Rauw sport mol</x-slot:name>
                        <x-slot:summary>
                            In the project for the course Skills Integration Lab 2 in the first semester, I together
                            with the rest of the group had the task analyse the requirements of a client. During this
                            project we had to work with the client to define what they wanted without actually making it
                            ourselfs. In this process we made datamodels and Figma prototypes that we regularly demoed
                            to our client.
                        </x-slot:summary>
                        <x-slot:contributed>For this project most of the documentation was written together, but the
                            prototypes were made individually. The prototypes I made were mostly about managing the
                            competitions Kvv Rauw competed for the trainer including absences.
                        </x-slot:contributed>
                        <x-slot:learned>In this project I learned to work with a client, as in how to handle situations
                            were the client changes their mind or has a different vision about how the application
                            should look like. In those situation I needed to learn that the client has the final say in
                            the end product. Also during this project I also learned to work better with StarUML as a
                            tool to make data models and Figma to make prototypes
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="3" image="deltafan_view.png" link="https://delta-fan.delta-fan.be/"
                                   date="Semester 1, 2025-2026" individual>
                        <x-slot:name>Delta fan</x-slot:name>
                        <x-slot:summary>
                            This project was made for the Course Web development. In this project we actually got to
                            chose what to base the to be made php site on. I chose to make a site all about Deltarune a
                            small indie game I really enjoyed. The project was made in Laravel php, also utilizing
                            tailwind for styling and livewire/alpine.js for interactivity, and hosted on
                            combell. Fun fact this portfolio is on the same domain as this project.
                        </x-slot:summary>
                        <x-slot:contributed>This website is build like a source of information about Deltarune, almost
                            like a wiki. It allows the user to watch news articles that adminastrators can write. You
                            can view written summaries about the characters and listen to music. Finally, their is also
                            a section were users can chat with each other about specific topics.
                        </x-slot:contributed>
                        <x-slot:learned>For this project I mostly learned how to work with the different technologies in
                            the project. This means working with php, tailwind, alpine.js and livewire.
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="4" image="poutrel_view.png">
                        <x-slot:name>KVV Rauw</x-slot:name>
                        <x-slot:summary>
                            Een opdracht te maken voor Skil2
                        </x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,...</x-slot:learned>
                        <x-slot:contributed> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributed>
                    </x-detail_menu>

                    <x-detail_menu show_number="5" image="pokelab_view.png"
                                   link="https://github.com/MilanMartens/Pok-mon-Game"
                                   date="Semester 2, 2024-2025">
                        <x-slot:name>Pokélab</x-slot:name>
                        <x-slot:summary>
                            This project was made for Skills Integration Lab 1. For the project we had to make, in team,
                            an idea from scratch that Teachers could use for their education. For our project we decided
                            to make a pokemon game were during the game the student would quizzed on their knowledge
                            while they played. Our primary inspiration was the education platform Bingle, but we gave it
                            more of a pokemon theme to stand out. The idea was the student makes their way through a
                            randomly generated dungeon to finally take their final test against their teacher.The game
                            was
                            made in RPG Maker XP and used the pokémon
                            essentials as a framework to work from.
                        </x-slot:summary>
                        <x-slot:contributed>For my roll in the project I largely focussed on making the combat with
                            questions work and making the dungeons correctly generate.
                        </x-slot:contributed>
                        <x-slot:learned>
                            During the project I learned how to work in a team and try to work out a good idea. During
                            the project we made use of RPG Maker XP which I also learned to work with and finally I
                            learned that you can find a lot of information by just looking it up.
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="6" image="accurate_pokedex_view.png" date="Semester 1, 2024-2025"
                                   individual>
                        <x-slot:name>Accurate* pokedex</x-slot:name>
                        <x-slot:summary>
                            This is my very first project made on Thomas More and was actually made as a small part of a
                            bigger assignment for Operating Systems. It's a small application that calls the
                            <a href="https://pokeapi.co/"
                               class="font-bold hover:text-sandy-brown-800 transition duration-200">pokéApi</a> to show
                            information about the pokémon name you input. It is made as a google chrome extension and
                            thus can be used in your browser at anytime.
                        </x-slot:summary>
                        <x-slot:contributed>Being my first ever project, it is rather small. The extension shows the
                            pokemon with it's generation and stats. Also it gives it's most recent pokedex entry.
                        </x-slot:contributed>
                        <x-slot:learned>During this project I learned to work with Javascript before even getting the
                            course on how to work with it. So this project allowed me to try new things even if I didn't
                            fully understand it yet.
                        </x-slot:learned>

                    </x-detail_menu>

                </div>
            </div>
        </div>
    </div>

</x-layouts.portfolio>
