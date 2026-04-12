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
                <x-select_screen_button selected_project="2" image="cycling_wattage.png" name="Cycling data science"/>
                <x-select_screen_button selected_project="3" image="deltafan_logo.png" name="Delta fan"/>
                <x-select_screen_button selected_project="4"/>
                <x-select_screen_button selected_project="5" image="pokelab_logo.png" name="Pokélab"/>
                <x-select_screen_button selected_project="6" image="accurate_pokedex.png" name="Accurate* pokedex"/>
            </div>
            {{-- detail menu --}}
            <div class="col-start-1 row-start-1" x-show="selected_project!=0" x-transition.duration.500ms x-transition.delay.500ms>
                <div class="relative">
                <div class="absolute top-1 right-1 cursor-pointer" @click="selected_project=0"><i class="fa-solid fa-x"></i></div>
                <x-detail_menu show_number="1"><x-slot:summary>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam blanditiis
                    consequuntur enim fuga in laboriosam nesciunt, nobis nostrum obcaecati, omnis recusandae temporibus
                    voluptatum. Culpa cupiditate, fugiat impedit quidem rem tempore ut veniam voluptates? Aliquid aut
                    consectetur cumque deserunt eos excepturi facilis, fuga in incidunt ipsam ipsum itaque, iusto
                    maiores minus modi molestias neque quisquam quo repellendus reprehenderit similique tempore vel
                    voluptatem. Eos esse explicabo, magnam maiores tempora ut veniam! Assumenda aut blanditiis dolor ex,
                    facilis fuga incidunt iusto, maiores maxime minima, minus mollitia non nostrum odit officia
                    quibusdam reprehenderit vero vitae voluptas voluptatibus! Adipisci aliquid aperiam architecto cumque
                    deleniti deserunt dicta fuga fugiat harum inventore magnam molestiae nemo nihil officiis perferendis
                    praesentium quaerat quidem rem veritatis, voluptatibus? Animi consequatur laborum molestias
                    recusandae voluptate. Architecto dicta et impedit saepe soluta? Deleniti ducimus ea eligendi illo
                    ratione sequi similique. Accusamus aspernatur at dolorem et excepturi in ipsum perspiciatis
                    possimus, saepe! Consequuntur eum illo nesciunt officia repudiandae tempore ullam. Architecto autem,
                    consectetur explicabo incidunt maxime nemo voluptatem voluptatum! Culpa delectus earum enim! Eius
                    explicabo fugiat magnam magni non, perspiciatis quaerat,</x-slot:summary>
                    <x-slot:learned> quis quisquam quod sapiente veniam
                    voluptates. Distinctio dolorem earum eligendi laboriosam nam, non repellendus veritatis! A, amet
                    culpa deserunt dignissimos distinctio dolore dolores excepturi fugiat, harum in ipsa ipsum
                        laudantium magnam maxime obcaecati quam quasi quibusdam quisquam saepe unde. </x-slot:learned> <x-slot:contributers> Accusamus alias
                    consequuntur doloribus, iusto laboriosam, nisi, obcaecati qui quo quod sunt tempore temporibus
                    voluptas voluptatum. Aperiam culpa dicta eius itaque nostrum officiis omnis quia quos veritatis?
                    Incidunt iure nihil obcaecati sapiente voluptas.</x-slot:contributers>
                </x-detail_menu>
                </div>
            </div>
        </div>
    </div>

</x-layouts.portfolio>
