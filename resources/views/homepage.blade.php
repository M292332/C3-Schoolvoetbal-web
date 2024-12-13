<x-base-layout>
    @auth
    <div class="flex flex-col justify-center items-center h-[40vh]">
        <p class="text-xl font-semibold">Alright, let's go gamble!</p>
        <video class="w-24 md:w-32 lg:w-40 h-auto" autoplay loop muted>
            <source src="{{ asset('2.mp4') }}" type="video/mp4">
        </video>
    </div>
    @else
    <div class="flex flex-col justify-center items-center h-[40vh] space-y-4">
        <p class="text-xl font-semibold">Ready to gamble?</p>
        <!-- Video under the text -->
        <video class="w-24 md:w-32 lg:w-40 h-auto" autoplay loop muted>
            <source src="{{ asset('2.mp4') }}" type="video/mp4">
        </video>
    </div>
    @endauth
</x-base-layout>
