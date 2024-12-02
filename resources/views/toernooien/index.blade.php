<x-base-layout title="Toernooien">
    <h1 class="text-2xl font-bold mb-4">Toernooien</h1>
    <a href="{{ route('toernooien.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nieuw Toernooi</a>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2">#</th>
                <th class="p-2">Titel</th>
                <th class="p-2">Max Teams</th>
                <th class="p-2">Status</th>
                <th class="p-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($toernooien as $toernooi)
            <tr>
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $toernooi->title }}</td>
                <td class="p-2">{{ $toernooi->max_teams }}</td>
                <td class="p-2">{{ $toernooi->started ? 'Gestart' : 'Niet gestart' }}</td>
                <td class="p-2">
                    <a href="{{ route('toernooien.show', $toernooi) }}" class="text-blue-500">Bekijk</a>
                    <a href="{{ route('toernooien.edit', $toernooi) }}" class="text-yellow-500">Bewerk</a>
                    <form action="{{ route('toernooien.destroy', $toernooi) }}" method="POST" class="inline">
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
