<x-layouts.portfolio title="Welcome to my portfolio">

    <div class="grid grid-cols-7 my-5 border-2 gap-8 border-black dark:border-white bg-lime-100 p-5 rounded">
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
        <p class="col-span-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim expedita nesciunt quae
            ratione voluptatum! A,
            accusamus aliquid amet animi aperiam culpa dolorem est ex expedita facilis fuga incidunt laborum neque nihil
            nobis numquam obcaecati odio optio pariatur provident quam quasi quidem quos repudiandae, sint unde vel? Ab
            aliquid corporis, dicta earum facere facilis fuga id maiores modi molestiae nemo nihil nostrum odit
            perferendis
            provident quibusdam, quidem, saepe sit soluta ullam. Assumenda incidunt nisi similique. At cumque dolor
            ducimus
            eaque enim in quasi rem veniam? Aperiam cupiditate debitis dignissimos et expedita facere fuga ipsum
            laboriosam
            nulla quos. A exercitationem id, inventore laborum necessitatibus odio quasi quod ratione recusandae
            tempora?
            Asperiores corporis esse et, illum in, iste labore laboriosam laborum libero officia placeat quae qui
            quisquam
            repellat repellendus sit temporibus totam? Alias aliquid aspernatur quaerat? Amet architecto autem,
            dignissimos
            ducimus enim est et eveniet excepturi explicabo harum ipsum iusto laboriosam minima modi, molestias nobis
            nulla
            pariatur quaerat qui quia quibusdam quisquam recusandae repellat, rerum sequi soluta voluptate. Doloremque,
            repellat, sequi! Amet aspernatur commodi, consequatur, cumque distinctio eos explicabo illo impedit incidunt
            iure, laudantium molestiae natus numquam possimus quia quidem quis quod reiciendis repellat repellendus
            temporibus vero voluptates voluptatibus? Dolor ex sint sit!</p>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
        <div class="my-5 border-2 border-black dark:border-white bg-sandy-brown-100 p-5 rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci aliquam amet aperiam
            architecto at cupiditate delectus dicta dolore eligendi eos et eveniet fuga hic in iste nam neque nihil
            nobis officia omnis perspiciatis possimus quae quaerat quas reiciendis, tempora velit veritatis voluptatum.
            Commodi consectetur debitis dolore ducimus eos facere hic inventore iusto labore maiores minima nemo
            nesciunt nobis nulla omnis, pariatur, quo rerum sapiente sint ullam? Eaque ipsa laborum, provident quam
            soluta veritatis. Corporis excepturi facilis inventore praesentium provident quos repudiandae similique sit.
            At itaque officia similique soluta? Exercitationem harum hic illo iure libero quidem sint totam veniam!
        </div>
        <div class="my-5 border-2 border-black dark:border-white bg-lime-100 p-5 rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci aliquam amet aperiam
            architecto at cupiditate delectus dicta dolore eligendi eos et eveniet fuga hic in iste nam neque nihil
            nobis officia omnis perspiciatis possimus quae quaerat quas reiciendis, tempora velit veritatis voluptatum.
            Commodi consectetur debitis dolore ducimus eos facere hic inventore iusto labore maiores minima nemo
            nesciunt nobis nulla omnis, pariatur, quo rerum sapiente sint ullam? Eaque ipsa laborum, provident quam
            soluta veritatis. Corporis excepturi facilis inventore praesentium provident quos repudiandae similique sit.
            At itaque officia similique soluta? Exercitationem harum hic illo iure libero quidem sint totam veniam!
        </div>
        <div class="my-5 border-2 border-black dark:border-white bg-granite-100 p-5 rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci aliquam amet aperiam
            architecto at cupiditate delectus dicta dolore eligendi eos et eveniet fuga hic in iste nam neque nihil
            nobis officia omnis perspiciatis possimus quae quaerat quas reiciendis, tempora velit veritatis voluptatum.
            Commodi consectetur debitis dolore ducimus eos facere hic inventore iusto labore maiores minima nemo
            nesciunt nobis nulla omnis, pariatur, quo rerum sapiente sint ullam? Eaque ipsa laborum, provident quam
            soluta veritatis. Corporis excepturi facilis inventore praesentium provident quos repudiandae similique sit.
            At itaque officia similique soluta? Exercitationem harum hic illo iure libero quidem sint totam veniam!
        </div>
    </div>


</x-layouts.portfolio>
