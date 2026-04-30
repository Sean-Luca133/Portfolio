<nav class="z-10 h-28 bg-gray-400 relative  sticky top-0 border-b-2 border-black dark:border-white">
    @php
        $current = basename($_SERVER['REQUEST_URI']);

    @endphp
    <ul class=" flex justify-center absolute -bottom-5 left-2 [&_li]:text-sm [&_li]:md:text-base [&_li]:p-2 [&_li]:font-bold [&_li]:font-header [&_li]:bg-gray-500 [&_li]:text-white/85 [&_li]:border-y-2 [&_li]:border-black dark:[&_li]:border-white ">
        <li class=" cursor-pointer rounded-s border-s-2 rounded-e border-e-2 border" onclick="window.history.back();">Go back</li>
    </ul>

</nav>
