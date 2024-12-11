<x-base-layout title="Toernooi: {{ $toernooi->title }}">
    <h1 class="text-2xl font-bold mb-4">Toernooi: {{ $toernooi->title }}</h1>

    <p><strong>Maximale Teams:</strong> {{ $toernooi->max_teams }}</p>
    <p><strong>Status:</strong> {{ $toernooi->started ? 'Gestart' : 'Niet gestart' }}</p>


    @if(session('error'))
        <div class="alert alert-danger bg-red-500 text-white p-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mt-6 font-bold">Ingeschreven Teams:</h2>
    <ul>
        @foreach($toernooi->teams as $team)
            <li>{{ $team->name }}</li>
        @endforeach
    </ul>

    <h2 class="mt-4 font-bold">Team Toevoegen:</h2>
    <form action="{{ route('toernooien.addTeam', $toernooi) }}" method="POST">
        @csrf
        <select name="team_id" class="border p-2 w-full">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Voeg Team Toe</button>
    </form>

    <a href="{{ route('toernooien.index') }}" class="text-blue-500 mt-4">Terug naar lijst</a>
</x-base-layout>
