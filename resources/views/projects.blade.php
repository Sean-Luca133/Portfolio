<x-layouts.portfolio title="What have I made?">
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

    <div
        class="md:mx-5 mx-2 border-2 border-black rounded-lg bg-lime-cream-100 mb-6 transition duration-200 flex flex-col">
        <div class="bg-lime-cream-200 block rounded-t-lg border-b border-black">
            <p class="font-bold text-lg text-center py-3">Select your project to view.</p>
        </div>
        <div x-data="{selected_project:0}" class="grid transition duration-1000 transform"
             :class="{'rotate-y-360':selected_project!=0}">
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
            <div class="col-start-1 row-start-1" x-show="selected_project!=0" x-transition.duration.500ms x-transition.delay.500ms>
                <div class="relative">
                <div class="absolute top-1 right-1 cursor-pointer" @click="selected_project=0"><i class="fa-solid fa-x"></i></div>

                    <x-detail_menu show_number="1" image="poutrel_view.png"><x-slot:summary>
                   Een opdracht te maken voor Skil2</x-slot:summary>
                    <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                </x-detail_menu>

                    <x-detail_menu show_number="2" image="poutrel_view.png"><x-slot:summary>
                            Een opdracht te maken voor Skil2</x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                    </x-detail_menu>

                    <x-detail_menu show_number="3" image="poutrel_view.png"><x-slot:summary>
                            Een opdracht te maken voor Skil2</x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                    </x-detail_menu>

                    <x-detail_menu show_number="4" image="poutrel_view.png"><x-slot:summary>
                            Een opdracht te maken voor Skil2</x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                    </x-detail_menu>

                    <x-detail_menu show_number="5" image="poutrel_view.png"><x-slot:summary>
                            Een opdracht te maken voor Skil2</x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                    </x-detail_menu>

                    <x-detail_menu show_number="6" image="poutrel_view.png"><x-slot:summary>
                            Een opdracht te maken voor Skil2</x-slot:summary>
                        <x-slot:learned>In groep werken via Jira. Php,... </x-slot:learned> <x-slot:contributers> Maarten,Quinte,Andreas, Sean-Luca</x-slot:contributers>
                    </x-detail_menu>

                </div>
            </div>
        </div>
    </div>

</x-layouts.portfolio>
