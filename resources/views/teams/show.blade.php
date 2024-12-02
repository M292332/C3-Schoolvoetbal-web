<x-base-layout title="Team: {{ $team->name }}">
    <h1 class="text-2xl font-bold mb-4">Team: {{ $team->name }}</h1>

    <div>
        <p><strong>Spelers:</strong></p>

        @if($team->players && is_array(json_decode($team->players))) <!-- Controleer of het een geldige array is -->
            <ul>
                @foreach(json_decode($team->players) as $player)
                    <li>{{ $player }}</li>
                @endforeach
            </ul>
        @else
            <p>Geen spelers toegevoegd.</p>
        @endif
    </div>

    <a href="{{ route('teams.index') }}" class="text-blue-500 mt-4">Terug naar lijst</a>
</x-base-layout>
