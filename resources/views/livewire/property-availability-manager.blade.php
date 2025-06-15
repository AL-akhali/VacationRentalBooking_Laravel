<div>
<div class="p-4">
    <h2 class="text-xl font-semibold mb-4">Availability Calendar</h2>
    <table class="w-full table-auto border border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Date</th>
                <th class="border p-2">Available</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($availabilities as $availability)
                <tr>
                    <td class="border p-2">{{ $availability->date->format('Y-m-d') }}</td>
                    <td class="border p-2">
                        {{ $availability->is_available ? '✅ Available' : '❌ Not Available' }}
                    </td>
                    <td class="border p-2">
                        <button
                            wire:click="toggleAvailability({{ $availability->id }})"
                            class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600"
                        >
                            Toggle
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
