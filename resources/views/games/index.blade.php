<table class="w-full mt-4 border">
    <thead>
        <tr class="bg-gray-100">
            <th class="p-2">#</th>
            <th class="p-2">Toernooi</th>
            <th class="p-2">Team 1</th>
            <th class="p-2">Team 2</th>
            <th class="p-2">Scores</th>
            <th class="p-2">Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td class="p-2">{{ $loop->iteration }}</td>
            <td class="p-2">{{ $game->toernooi->title }}</td>
            <td class="p-2">{{ $game->team1->name }}</td>
            <td class="p-2">{{ $game->team2->name }}</td>
            <td class="p-2">{{ $game->team_1_score }} - {{ $game->team_2_score }}</td>
            <td class="p-2">
                <a href="{{ route('games.show', $game) }}" class="text-blue-500">Bekijk</a>
                <a href="{{ route('games.edit', $game) }}" class="text-yellow-500">Bewerk</a>
                <form action="{{ route('games.destroy', $game) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Verwijder</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>