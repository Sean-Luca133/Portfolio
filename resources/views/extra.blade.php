<x-layouts.portfolio_quest>
    <div class="mt-[10%]">


                <form class="p-3 flex flex-col gap-2 border-2 border-black rounded-lg bg-gray-200 max-w-[60%] m-auto" action="{{ route('contact.send') }}" method="POST">
                    <h2 class="text-center">What is my first project?</h2>
                    @csrf

                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Who receives?"/>
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

                        <textarea name="message" placeholder="Your answer">{{ old('message') }}</textarea>
                        @error('message') <span class="text-red-500">{{ $message }}</span> @enderror


                    <button type="submit" class="cursor-pointer">Send</button>
                    @if(session('success'))
                        <p class="text-green-600">{{ session('success') }}</p>
                    @endif
                </form>



    </div>
</x-layouts.portfolio_quest>
