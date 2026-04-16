@props([
    "skill_items" => [],
    "color" =>null
])

@php
switch($color){
    case "green":
        $bg_color = "bg-lime-300 hover:bg-lime-800";
        $text_color = "text-lime-800 hover:text-lime-300";
        break;
    case "yellow":
        $bg_color = "bg-lime-cream-300 hover:bg-lime-cream-800";
        $text_color = "text-lime-cream-800 hover:text-lime-cream-300";
        break;
    case "orange":
        $bg_color = "bg-sandy-brown-300 hover:bg-sandy-brown-800";
        $text_color = "text-sandy-brown-800 hover:text-sandy-brown-300";
        break;
    case "granite":
       $bg_color = "bg-granite-300 hover:bg-granite-800";
       $text_color = "text-granite-800 hover:text-granite-300";
       break;
    default:
        $bg_color = "bg-gray-300";
       $text_color = "text-black";
}
if($skill_items != []){
  $skill_items = explode(";",$skill_items);
}

    @endphp
<div {{$attributes->merge(["class" => "my-2"])}}>
    <ul>
        @foreach($skill_items as $skill_item)
            <li class="font-bold rounded-xl {{$bg_color}} {{$text_color}} inline-block p-1 border-2 border-black text-xs stransition duration-200">{{$skill_item}}</li>
        @endforeach

    </ul>
</div>
