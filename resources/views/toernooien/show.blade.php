<x-base-layout title="Toernooi: {{ $toernooi->title }}">
    <h1 class="text-2xl font-bold mb-4">Toernooi: {{ $toernooi->title }}</h1>
    <a href="{{ route('toernooien.show', $toernooi->id) }}">Bekijk Toernooi</a>


    <div>
        <p><strong>Maximale Teams:</strong> {{ $toernooi->max_teams }}</p>
        <p><strong>Status:</strong> {{ $toernooi->started ? 'Gestart' : 'Niet gestart' }}</p>
    </div>

    <a href="{{ route('toernooien.index') }}" class="text-blue-500 mt-4">Terug naar lijst</a>
</x-base-layout>
