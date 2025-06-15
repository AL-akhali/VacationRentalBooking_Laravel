<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class PropertyAvailabilityManager extends Component
{
    public Property $property;

    public function toggleAvailability($dateId)
    {
        $date = $this->property->availabilities()->find($dateId);
        if ($date) {
            $date->is_available = !$date->is_available;
            $date->save();
        }
    }

    public function render()
    {
        return view('livewire.property-availability-manager', [
            'availabilities' => $this->property->availabilities()->orderBy('date')->get(),
        ]);
    }
}
