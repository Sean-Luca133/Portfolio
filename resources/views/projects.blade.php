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
                <img class="rounded-lg max-h-100 border-2 border-black dark:border-white" src="/storage/projects.png"
                     alt="About me image">
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
                <x-select_screen_button selected_project="4" image="cycling_data_science.png"
                                        name="Cycling data science project"/>
                <x-select_screen_button selected_project="5" image="pokelab_logo.png" name="Pokélab"/>
                <x-select_screen_button selected_project="6" image="accurate_pokedex.png" name="Accurate* pokedex"/>
            </div>
            {{-- detail menu --}}
            <div class="col-start-1 row-start-1" x-show="selected_project!=0" x-transition.duration.500ms
                 x-transition.delay.500ms>
                <div class="relative">
                    <div class="absolute top-1 right-1 cursor-pointer" @click="selected_project=0"><i
                            class="fa-solid fa-x"></i></div>

                    <x-detail_menu show_number="1" image="poutrel_view.png" date="Semester 2, 2025-2026"
                                   link="https://poutrel.quintedev.be">
                        <x-slot:name>Poutrel</x-slot:name>
                        <x-slot:summary>
                            This project was made for the second semester of Skills Integration Lab 2. In it, I together
                            with the rest of my group, had to build a Laravel PHP web application for a client, Poutrel,
                            a fitness studio. To make this possible, we worked with the Scrum methodology, using Jira as
                            our ticketing system.
                        </x-slot:summary>
                        <x-slot:contributed>The biggest functionalities I realized were the pages that allowed the user
                            to order and pay for lessons on the web application. Smaller things I made were the
                            dashboard for the customer and one of the CRUD pages used by the administrator. Also, during
                            the project, I took the role of scrum master to keep the team on track during the stand-up
                            meetings.
                        </x-slot:contributed>
                        <x-slot:learned>Because it is group work, I of course learned to work better in group. I also
                            learned to work with the Scrum methodology and working with a client, things I have already
                            done in other projects but could now reïnforce. Lastly, I learned some new things about what
                            you could do with Laravel, like payment pages with Stripe or sending custom markdown mails.
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="2" image="kvv_rauw_view.png" date="Semester 1, 2025-2026">
                        <x-slot:name>KVV Rauw sport mol</x-slot:name>
                        <x-slot:summary>
                            In the project for the course Skills Integration Lab 2 in the first semester, I together
                            with the rest of the group, had the task to analyse the requirements of a client. During
                            this project, we had to work with the client to define what they wanted without actually
                            making it ourselves. In this process, we made datamodels and Figma prototypes that we
                            regularly demoed to our client.
                        </x-slot:summary>
                        <x-slot:contributed>For this project, most of the documentation was written together, but the
                            prototypes were made individually. The prototypes I made were mostly about managing the
                            competitions KVV Rauw competed in as an option for the trainer, including absences.
                        </x-slot:contributed>
                        <x-slot:learned>In this project, I learned to work with a client, such as how to handle
                            situations where the client changes their mind or has a different vision about how the
                            application should look like. In those situations, I needed to learn that the client has the
                            final say in the end product. Also, during this project, I also learned to work better with
                            StarUML as a tool to make data models and Figma to make prototypes.
                        </x-slot:learned>

                    </x-detail_menu>


                    <x-detail_menu show_number="3" image="deltafan_view.png" link="https://delta-fan.delta-fan.be/"
                                   date="Semester 1, 2025-2026" individual>
                        <x-slot:name>Delta fan</x-slot:name>
                        <x-slot:summary>
                            This project was made for the Course Web development. In this project, we actually got to
                            choose what to base the site on, which had to be made in PHP Laravel. I chose to make a site
                            all about Deltarune, a small indie game I really enjoyed. The project was made in Laravel
                            PHP, also utilizing Tailwind for styling and livewire/alpine.js for interactivity, and
                            hosted on Combell. Fun fact, this portfolio is on the same domain as this project. Also, if
                            you want to log in please view the GitHub repository Readme located in the footer of the
                            site.
                        </x-slot:summary>
                        <x-slot:contributed>This website is built like a source of information about Deltarune, almost
                            like a wiki. It allows the user to watch news articles that administrators can write. You
                            can view written summaries about the characters and listen to music. Finally, there is also
                            a section where users can chat with each other about specific topics.
                        </x-slot:contributed>
                        <x-slot:learned>For this project, I mostly learned how to work with the different technologies
                            in the project. This means working with PHP, Tailwind, Alpine.js and Livewire.
                        </x-slot:learned>

                    </x-detail_menu>
                    <x-detail_menu show_number="4" image="cycling_data_science_view.png" individual
                                   date="Semester 1, 2025-2026"
                                   link="https://github.com/Sean-Luca133/Data-science-cycling-wattage-project">
                        <x-slot:name>Cycling data science project</x-slot:name>
                        <x-slot:summary>
                            This project was made for the course Data Science. In it I had to scrape, clean and
                            visualize a data set of choice about cycling. I took the direction in this project to try
                            and find out about what wattage different riders or countries generate on average across
                            different races and how this evolved over the years. I decided to cover the Tour de France,
                            the Giro and the Vuelta with ProCyclingStats as
                            <a href="https://www.procyclingstats.com/"
                               class="font-bold hover:text-sandy-brown-800 transition duration-200">datasource</a>. The
                            entire project is made in Python Jupyter notebooks and is viewable on GitHub.
                        </x-slot:summary>
                        <x-slot:contributed>This project consisted of the scraping of the data on ProcyclingStats, which
                            was followed by the cleaning of this data to be used to get insights. An insight I for
                            example found was that the Wattage riders generated on average per race was normally
                            distributed and that most riders generated between 350 and 400 Watts.
                        </x-slot:contributed>
                        <x-slot:learned>During this project, I mostly improved my Python skills, especially related to
                            scraping and NumPy. Also, this project improved my view on working with data from scraping
                            to analysis.
                        </x-slot:learned>

                    </x-detail_menu>


                    <x-detail_menu show_number="5" image="pokelab_view.png"
                                   link="https://github.com/MilanMartens/Pok-mon-Game"
                                   date="Semester 2, 2024-2025">
                        <x-slot:name>Pokélab</x-slot:name>
                        <x-slot:summary>
                            This project was made for Skills Integration Lab 1. For the project we had to make an idea
                            from scratch, in team, that teachers could use for their education with an IT element at
                            its core. For our project, we decided to make a Pokémon game where during the game the
                            student would be quizzed on their knowledge while they played. Our primary inspiration was
                            the education platform Bingle, but we gave it more of a Pokémon theme to stand out. The idea
                            was that the student makes their way through a randomly generated dungeon, filled with
                            student battles, to finally take their final test against their teacher. The game was made
                            in RPG Maker XP and used Pokémon Essentials as a framework to work from.
                        </x-slot:summary>
                        <x-slot:contributed>For my role in the project, I largely focused on making the combat with
                            questions work and making the dungeons correctly generate.
                        </x-slot:contributed>
                        <x-slot:learned>
                            During the project, I learned how to work in a team and try to work out a good idea with no
                            instructions given for how it should look. During the project, we made use of RPG Maker XP,
                            which I also learned to work with and finally, I learned that you can find a lot of
                            information by just looking it up.
                        </x-slot:learned>

                    </x-detail_menu>

                    <x-detail_menu show_number="6" image="accurate_pokedex_view.png" date="Semester 1, 2024-2025"
                                   link="https://chromewebstore.google.com/detail/lnhafidchlhofgpiipalojghgnmbhikf"
                                   individual>
                        <x-slot:name>Accurate* pokedex</x-slot:name>
                        <x-slot:summary>
                            This is my very first project made on Thomas More and was actually made as a small part of a
                            bigger assignment for Operating Systems. It's a small application that calls the
                            <a href="https://pokeapi.co/"
                               class="font-bold hover:text-sandy-brown-800 transition duration-200">PokéAPI</a>to show
                            information about the Pokémon name you input. It is made as a Google Chrome extension and
                            thus can be used in your browser at any time.
                        </x-slot:summary>
                        <x-slot:contributed>Being my first ever project, it is rather small and simple. The extension
                            shows the
                            Pokémon with its generation and stats. Also, it gives its most recent pokédex entry. Despite
                            its simplicity, it is available on the Google Chrome web store for download. If you want,
                            you can try it for yourself. It's not perfect, but it's the first real thing I ever made, so
                            it is special.

                        </x-slot:contributed>
                        <x-slot:learned>During this project, I learned to work with JavaScript before even getting the
                            course on how to work with it. So this project allowed me to try new things even if I didn't
                            fully understand it yet.
                        </x-slot:learned>

                    </x-detail_menu>

                </div>
            </div>
        </div>
    </div>

</x-layouts.portfolio>
