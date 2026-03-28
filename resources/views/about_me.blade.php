<x-layouts.portfolio title="Who am I?">
    <x-slot:top><p class="my-5 mx-auto max-w-[65%]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa iste obcaecati perferendis qui! Dolorum
            excepturi
            inventore itaque nihil nostrum tenetur unde! A alias aliquid, aperiam asperiores assumenda debitis delectus
            deleniti
            deserunt dolore est fugit odit officia omnis perferendis possimus provident, quia reiciendis reprehenderit,
            repudiandae sunt suscipit tempore voluptatem? Ducimus excepturi in magni sunt ullam! Aut, enim ipsam laudantium
            magnam possimus rem sed sequi. Accusantium aliquam aliquid amet animi, architecto aspernatur at corporis cumque
            dicta ducimus enim eos est fugiat illum incidunt inventore maiores maxime minima modi necessitatibus nemo neque
            nobis odit praesentium quam rem rerum suscipit ullam veniam voluptatum.</p></x-slot:top>

    <h2 class="font-header text-2xl">Brief introduction</h2>
        <x-content_box>
            <h1>Test</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at cupiditate facilis hic illum
                laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt iusto
                laborum
                molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo reiciendis,
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

    <h2 class="font-header text-2xl">Why applied computer science?</h2>
        <x-content_box reverse><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at cupiditate
                facilis hic illum
                laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt iusto
                laborum
                molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo reiciendis,
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

        <h2 class="font-header text-2xl">Some interresting facts about me</h2>

        @php
            $side_images = [
                [
                    'src' => 'placeholder.png',
                    'alt' => 'side_image',
                    'bottom' => '0',
                    'left' => '0'
                ],
                [
                    'src' => 'placeholder.png',
                    'alt' => 'side_image',
                    'bottom' => '0',
                    'left' => '10'
                ]
                ];
        @endphp
        <x-content_box :side_images="$side_images">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at cupiditate facilis hic illum
                laudantium, nesciunt quod veniam voluptas voluptate. Accusamus consequatur exercitationem incidunt iusto
                laborum
                molestias nostrum officiis perferendis? Atque consectetur eligendi hic nemo perspiciatis quo reiciendis,
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


</x-layouts.portfolio>
