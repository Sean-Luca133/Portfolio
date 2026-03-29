<x-layouts.portfolio title="Who am I?">
    <x-slot:top><div class="my-5 mx-auto md:max-w-[65%] max-w-[90%] grid grid-cols-5 gap-4">
            <p class="md:col-span-3 col-span-5 self-center md:text-base text-sm">
                Hi again, on this page I am going to give you a more detailed look at who I am and why I chose this
                field of
                study in the first place. It will even include some tidbits about myself which will hopefully give a
                better
                about who I am as a person. So, if you are interested keep on reading.
            </p>
            <figure class="md:col-span-2 col-span-5 flex justify-center">
            <img  src="/storage/placeholder.png" alt="About me image">
            </figure>
        </div>
    </x-slot:top>


    {{--overflow-x-clip used to not make cards extend the browser viewport when not activated yet--}}
    <div class="overflow-x-clip">
        <div class="my-10"><h2 class="font-header text-2xl">Brief introduction</h2>
            <x-content_box image="placeholder.png">
                <h1>Test</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at cupiditate facilis hic illum
                    laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt
                    iusto
                    laborum
                    molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo
                    reiciendis,
                    reprehenderit! Accusamus aliquam aliquid architecto at consequatur cum delectus distinctio enim
                    exercitationem
                    fuga fugit, itaque magnam modi nisi, possimus quam quas quo recusandae reiciendis repudiandae sit
                    tenetur
                    voluptates? A animi architecto aspernatur delectus deserunt dolore earum error eum excepturi
                    exercitationem
                    expedita illum in incidunt maiores nostrum nulla, optio perspiciatis quam qui sit tempora unde
                    voluptate? Ab
                    eius laborum nemo quod repudiandae voluptates!</p>
            </x-content_box>
        </div>

        <div class="my-10"><h2 class="font-header text-2xl">Why applied computer science?</h2>
            <x-content_box reverse image="placeholder.png"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aliquam at cupiditate
                    facilis hic illum
                    laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt
                    iusto
                    laborum
                    molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo
                    reiciendis,
                    reprehenderit! Accusamus aliquam aliquid architecto at consequatur cum delectus distinctio enim
                    exercitationem
                    fuga fugit, itaque magnam modi nisi, possimus quam quas quo recusandae reiciendis repudiandae sit
                    tenetur
                    voluptates? A animi architecto aspernatur delectus deserunt dolore earum error eum excepturi
                    exercitationem
                    expedita illum in incidunt maiores nostrum nulla, optio perspiciatis quam qui sit tempora unde
                    voluptate? Ab
                    eius laborum nemo quod repudiandae voluptates!</p>
            </x-content_box>
        </div>

        <div class="my-10"><h2 class="font-header text-2xl">Some interresting facts about me</h2>

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
            <x-content_box :side_images="$side_images" image="placeholder.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at cupiditate facilis hic illum
                    laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt
                    iusto
                    laborum
                    molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo
                    reiciendis,
                    reprehenderit! Accusamus aliquam aliquid architecto at consequatur cum delectus distinctio enim
                    exercitationem
                    fuga fugit, itaque magnam modi nisi, possimus quam quas quo recusandae reiciendis repudiandae sit
                    tenetur
                    voluptates? A animi architecto aspernatur delectus deserunt dolore earum error eum excepturi
                    exercitationem
                    expedita illum in incidunt maiores nostrum nulla, optio perspiciatis quam qui sit tempora unde
                    voluptate? Ab
                    eius laborum nemo quod repudiandae voluptates!</p>
            </x-content_box>
        </div>
    </div>


</x-layouts.portfolio>
