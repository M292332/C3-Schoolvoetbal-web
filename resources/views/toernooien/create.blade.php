<x-base-layout title="Nieuw Toernooi">
    <h1 class="text-2xl font-bold mb-4">Nieuw Toernooi</h1>

    <form action="{{ route('toernooien.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="title" class="block font-bold">Titel</label>
            <input type="text" id="title" name="title" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="max_teams" class="block font-bold">Maximaal Teams</label>
            <input type="number" id="max_teams" name="max_teams" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="started" class="block font-bold">Gestart</label>
            <input type="date" id="started" name="started" class="border p-2 w-full">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-base-layout>
