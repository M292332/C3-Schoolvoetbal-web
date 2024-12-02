<x-base-layout title="Nieuwe Game">
    <h1 class="text-2xl font-bold mb-4">Nieuwe Game</h1>

    <form action="{{ route('games.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="toernooi_id" class="block font-bold">Toernooi</label>
            <select id="toernooi_id" name="toernooi_id" class="border p-2 w-full" required>
                @foreach($toernooien as $toernooi)
                    <option value="{{ $toernooi->id }}">{{ $toernooi->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="team_1_id" class="block font-bold">Team 1</label>
            <select id="team_1_id" name="team_1_id" class="border p-2 w-full" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="team_2_id" class="block font-bold">Team 2</label>
            <select id="team_2_id" name="team_2_id" class="border p-2 w-full" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-base-layout>
