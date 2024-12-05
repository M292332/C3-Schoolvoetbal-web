<x-base-layout title="Team: {{ $team->name }}">
    <h1 class="text-2xl font-bold mb-4">Team: {{ $team->name }}</h1>

    <div>
        <p><strong>Spelers:</strong></p>

        @if($team->players->isNotEmpty()) <!-- Controleer of er spelers zijn -->
            <ul>
                @foreach($team->players as $player)
                    <li>{{ $player->name }}</li> <!-- Toon de naam van de speler -->
                @endforeach
            </ul>
        @else
            <p>Geen spelers toegevoegd.</p>
        @endif
    </div>

    <a href="{{ route('teams.index') }}" class="text-blue-500 mt-4">Terug naar lijst</a>
</x-base-layout>
