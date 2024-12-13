<x-base-layout>
    @auth
    <div class="flex justify-center items-center h-[40vh]">
        <p class="text-xl font-semibold">Alright, let's go gamble!</p>
    </div>
    @else
    <div class="flex justify-center items-center h-[40vh]">
        <p class="text-xl font-semibold">Ready to gamble?</p>
    </div>
    @endauth
</x-base-layout>
