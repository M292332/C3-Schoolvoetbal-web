<x-base-layout title="Nieuw Team">
    <h1 class="text-2xl font-bold mb-4">Nieuw Team</h1>

    <form action="{{ route('teams.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block font-bold">Naam</label>
            <input type="text" id="name" name="name" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="players" class="block font-bold">Spelers</label>
            <textarea id="players" name="players" class="border p-2 w-full" required></textarea>
            <small>Voer spelersnamen in, gescheiden door een komma.</small>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-base-layout>
