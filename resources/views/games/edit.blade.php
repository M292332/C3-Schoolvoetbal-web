<x-base-layout title="Bewerk Game">
    <h1 class="text-2xl font-bold mb-4">Bewerk Game</h1>

    <form action="{{ route('games.update', $game) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="team_1_score" class="block font-bold">Team 1 Score</label>
            <input type="number" id="team_1_score" name="team_1_score" value="{{ old('team_1_score', $game->team_1_score) }}" class="border p-2 w-full">
        </div>

        <div>
            <label for="team_2_score" class="block font-bold">Team 2 Score</label>
            <input type="number" id="team_2_score" name="team_2_score" value="{{ old('team_2_score', $game->team_2_score) }}" class="border p-2 w-full">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-base-layout>
