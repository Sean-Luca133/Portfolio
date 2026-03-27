@props(
    ['title'=>'Title',
    'description'=>'Description of this card',
    'route'=>'#',
    'bg_color'=>'bg-sandy-brown-100',
    'footer_color'=>'bg-sandy-brown-200',
    'label'=>'Label']
)


<div class="border-2 border-black rounded-lg flex flex-col no-underline hover:-translate-y-1 hover:shadow-[5px_5px_0_#111] transition-all duration-200">
    <div class="{{ $bg_color }} flex-1 p-5 flex flex-col gap-3 rounded-t-lg">
        <p class="font-header text-lg text-black">{{ $title }}</p>
        <p class="text-xs md:text-sm font-main text-gray-600">{{ $description }}</p>
    </div>
    <a href="{{ route($route) }}">
        <div class="{{ $footer_color }} hover:[&_span]:text-light-green-800 [&_span]:transition [&_span]:duration-200 transition duration-200 border-t-2 border-black px-5 py-2 flex justify-between items-center rounded-b-lg">
            <span class="text-[10px] font-bold font-main tracking-widest">{{ $label }}</span>
            <span class="font-bold text-base ">→</span>
        </div>
    </a></div>
