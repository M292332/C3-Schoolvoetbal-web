<x-base-layout title="Bewerk Team: {{ $team->name }}">
    <h1 class="text-2xl font-bold mb-4">Bewerk Team: {{ $team->name }}</h1>

    <form action="{{ route('teams.update', $team) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold">Team Naam</label>
            <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" class="w-full p-2 border rounded" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="players" class="block text-sm font-semibold">Spelers (gescheiden door komma's)</label>
            <input type="text" name="players" id="players" value="{{ old('players', implode(',', $team->players->pluck('name')->toArray())) }}" class="w-full p-2 border rounded" placeholder="Voer spelers in, gescheiden door komma's" required>
            @error('players')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
            <a href="{{ route('teams.index') }}" class="text-blue-500 ml-4">Terug naar lijst</a>
        </div>
    </form>
</x-base-layout>
