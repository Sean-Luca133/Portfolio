<x-layouts.portfolio title="What are my skills and education?">
    <x-slot:top>
        <div class="my-5 mx-auto md:max-w-[65%] max-w-[90%] grid grid-cols-5 gap-4">
            <p class="md:col-span-3 col-span-5 self-center md:text-base text-sm">
                Here you can review what my skills are and what/where I have studied. If you have not found out that
                you can click the logo here is a more structured view of my skills. Also my education from primary
                school
                until now is included. Finally, because this is the CV page you can view my CV by pressing the button at
                the bottom of the page.

            </p>
            <figure class="md:col-span-2 col-span-5 flex justify-center">
                <img class="rounded-lg max-h-100 border-2 border-black dark:border-white" src="/storage/cv.png" alt="Cv image">
            </figure>
        </div>
    </x-slot:top>

    <div x-data="{show_cv:false}">
        <div class="mb-5 flex gap-2">
            <button
                class="cursor-pointer rounded-lg border-2 border-black p-2 inline-block bg-granite-200 hover:bg-granite-300 transition duration-200"
                @click="show_cv = !show_cv">View CV
            </button>
            <div x-show="show_cv" x-transition.duration.200ms class="flex justify-center"><a href="/storage/CV_Sean-Luca_Jansen.pdf" download
                                                class=" cursor-pointer rounded-lg border-2 border-black p-2 inline-block bg-granite-200 hover:bg-granite-300 transition duration-200">
                    Download <i class="fa-solid fa-file-arrow-down"></i>
                </a>
            </div>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-3" x-show="!show_cv" x-transition.duration.200ms>
            <div class="bg-granite-100 border-2 border-black rounded-lg">
                <h2 class="font-bold font-header text-center border-b-2 border-black mb-2 rounded-t-lg bg-granite-300 py-2">
                    Skills</h2>

                <div class="p-3">
                    <h3 class="font-bold">Hard Skills</h3>
                    <p class="text-sm my-1">Here are some hard skills I have developed during my time at Thomas More.
                        Sadly
                        I can't be good at
                        everything so they are shown in categories of how confident I am i them.</p>
                    <div class="[&_p]:text-xs">
                        <h4>Great</h4>
                        <p>Here are some technologies I have interacted with and think that I am rather good at.</p>
                        <x-skill_list skill_items="HTML;Tailwind;Python;PHP" color="green"/>
                        <h4>Decent</h4>
                        <p>Here are some technologies I have interacted with and think that I am capable in.</p>
                        <x-skill_list skill_items="CSS;StarUML;Git;Java;Alpine.js;.NET;Qlik;Livewire;Laravel" color="yellow"/>
                        <h4>OK</h4>
                        <p>Here are some technologies I have interacted with and think that I am not very great at right
                            now
                            but
                            could
                            be with some more practice.</p>
                        <x-skill_list skill_items="JavaScript;MySQL;Docker;React" color="orange"/>
                    </div>

                    <h3 class="font-bold mt-2">Soft Skills</h3>
                    <p class="text-sm my-1">Here are some soft skills I have developed during my time at Thomas More</p>
                    <x-skill_list skill_items="Working team;Interacting professionally;Communication;Acting as scrummaster;Analitical thinking" color="granite"/>
                </div>
            </div>


            <div class="bg-granite-100 border-2 border-black rounded-lg">
                <h2 class="font-bold font-header text-center border-b-2 border-black mb-2 rounded-t-lg bg-granite-300 py-2">
                    Education</h2>
                <div
                    class="[&_h3]:font-bold [&_h4]:text-italic p-3 flex flex-col gap-8 [&_div]:border-l-4 [&_div]:border-granite-300 [&_div]:pl-2 [&_div]:hover:shadow-[2px_2px_0_#111] [&_div]:hover:-translate-y-3 [&_div]:transition [&_div]:duration-200">
                    <div>
                        <h3>University</h3>
                        <h4>Thomas More (Geel)</h4>
                        <p>September 2024 - Now</p>
                        <p>Study: Bachular Applied Computer Science</p></div>

                    <div><h3>Secondary school</h3>
                        <h4>Sint-Pieter institute (Turnhout)</h4>
                        <p>September 2018 - September 2024</p>
                        <p>Study: Science and Mathematics</p>
                    </div>

                    <div>
                        <h3>Primary school</h3>
                        <h4>Sint-Pieter institute (Turnhout)</h4>
                        <p>September 2012 - September 2018</p>
                        <p>Study: General knowledge</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center my-3">
            <div x-show="show_cv" x-transition.duration.200ms>

                <div class="flex justify-center">
                    <canvas class="border-2 border-black rounded-lg" id="cv_canvas"/>
                </div>
            </div>
        </div>
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
