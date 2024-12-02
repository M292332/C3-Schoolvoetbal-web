<x-base-layout title="Bewerk Toernooi: {{ $toernooi->title }}">
    <h1 class="text-2xl font-bold mb-4">Bewerk Toernooi: {{ $toernooi->title }}</h1>

    <form action="{{ route('toernooien.update', $toernooi) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold">Toernooi Naam</label>
            <input type="text" name="title" id="title" value="{{ old('title', $toernooi->title) }}" class="w-full p-2 border rounded" required>
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="max_teams" class="block text-sm font-semibold">Maximale Teams</label>
            <input type="number" name="max_teams" id="max_teams" value="{{ old('max_teams', $toernooi->max_teams) }}" class="w-full p-2 border rounded" required min="1">
            @error('max_teams')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="started" class="block text-sm font-semibold">Startdatum</label>
            <input type="date" name="started" id="started" value="{{ old('started', $toernooi->started) }}" class="w-full p-2 border rounded">
            @error('started')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
            <a href="{{ route('toernooien.index') }}" class="text-blue-500 ml-4">Terug naar lijst</a>
        </div>
    </form>
</x-base-layout>
