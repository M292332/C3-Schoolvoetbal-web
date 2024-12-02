<x-base-layout title="Game: {{ $game->team1->name }} vs {{ $game->team2->name }}">
    <h1 class="text-2xl font-bold mb-4">Game: {{ $game->team1->name }} vs {{ $game->team2->name }}</h1>

    <div>
        <p><strong>Toernooi:</strong> {{ $game->toernooi->title }}</p>
        <p><strong>Scores:</strong> {{ $game->team_1_score }} - {{ $game->team_2_score }}</p>
        <p><strong>Datum:</strong> {{ $game->created_at->format('d-m-Y') }}</p>
    </div>

    <a href="{{ route('games.index') }}" class="text-blue-500 mt-4">Terug naar lijst</a>
</x-base-layout>
