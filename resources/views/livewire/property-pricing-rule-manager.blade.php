<div>
<div class="p-4 max-w-md mx-auto bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Manage Pricing Rules</h2>

    @if (session()->has('message'))
        <div class="mb-4 text-green-600">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label for="min_stay" class="block font-medium">Minimum Stay (nights)</label>
            <input type="number" id="min_stay" wire:model="min_stay" min="1" class="border rounded w-full p-2" />
            @error('min_stay') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="max_stay" class="block font-medium">Maximum Stay (nights)</label>
            <input type="number" id="max_stay" wire:model="max_stay" min="{{ $min_stay ?? 1 }}" class="border rounded w-full p-2" />
            @error('max_stay') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="check_in_time" class="block font-medium">Check-in Time</label>
            <input type="time" id="check_in_time" wire:model="check_in_time" class="border rounded w-full p-2" />
            @error('check_in_time') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="check_out_time" class="block font-medium">Check-out Time</label>
            <input type="time" id="check_out_time" wire:model="check_out_time" class="border rounded w-full p-2" />
            @error('check_out_time') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</div>
</div>
