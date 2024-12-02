<x-base-layout title="Teams">
    <h1 class="text-2xl font-bold mb-4">Teams</h1>
    <a href="{{ route('teams.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nieuw Team</a>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2">#</th>
                <th class="p-2">Naam</th>
                <th class="p-2">Spelers</th>
                <th class="p-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $team->name }}</td>
                <td class="p-2">
                    @foreach($team->players as $player)
                        <li>{{ $player->name }}</li>
                    @endforeach
                </td>
                <td class="p-2">
                    <a href="{{ route('teams.show', $team) }}" class="text-blue-500">Bekijk</a>
                    <a href="{{ route('teams.edit', $team) }}" class="text-yellow-500">Bewerk</a>
                    <form action="{{ route('teams.destroy', $team) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Verwijder</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-base-layout>
