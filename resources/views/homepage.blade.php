<x-base-layout>
    @auth
    <div class="flex justify-center items-center h-[40vh]">
        <p class="text-xl font-semibold">Alright, let's go gambling!</p>
    </div>
    @else
    <div class="flex justify-center items-center h-[40vh]">
        <p class="text-xl font-semibold">Ready to go gambling?</p>
    </div>
    @endauth
</x-base-layout>
