<x-mail::message>

You gave as answer: {{$message}}
    @if($message == "correct")

Please continue
    <x-mail::button :url="''">
        Button Text
    </x-mail::button>
    @else

That's not what were looking for.
    @endif
</x-mail::message>
