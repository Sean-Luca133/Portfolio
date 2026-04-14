<x-layouts.portfolio title="What are my skills and education?">
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

    <a href="/storage/CV_Sean-Luca_Jansen.pdf"  download
       class="rounded-lg border-2 border-black p-2 inline-block bg-granite-200 hover:bg-granite-300 transition duration-200">
        Download <i class="fa-solid fa-file-arrow-down"></i>
    </a>

    <div class="flex justify-center">
        <canvas class="border-2 border-black rounded-lg" id="cv_canvas"/>
    </div>

    @push('scripts')
        <script>

            async function renderCV() {
                // get canvas tag
                const canvas = document.getElementById('cv_canvas')


                // get pdf reference as promise
                const pdf = await pdfjs.getDocument('/storage/CV_Sean-Luca_Jansen.pdf').promise

                // when promise resolves get the first(only) page
                const page = await pdf.getPage(1)


                // define view port to render pdf in.
                const viewport = page.getViewport({scale: 1})


                // Support HiDPI-screens.
                var outputScale = window.devicePixelRatio || 1;

                // pixel size available to render the canvas to make it look sharper on HiDPI screens
                canvas.width = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);

                //actual size that the canvas will be rendered
                canvas.style.width = Math.floor(viewport.width) + "px";
                canvas.style.height = Math.floor(viewport.height) + "px";

                // transform pdf if not 1 to 1 format to avoid white spaces on the sides of the canvas
                var transform = outputScale !== 1
                    ? [outputScale, 0, 0, outputScale, 0, 0]
                    : null;


                // render the pdf as a promis
                await page.render({canvasContext: canvas.getContext('2d'), transform: transform, viewport}).promise
            }

            // only render after DOM loads to have canvas tag
            document.addEventListener('DOMContentLoaded', renderCV)
            document.debounce(500).addEventListener('resize', renderCV)
        </script>

    @endpush
</x-layouts.portfolio>
