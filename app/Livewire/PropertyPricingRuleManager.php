<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\PropertyPricingRule;

class PropertyPricingRuleManager extends Component
{
    public Property $property;

    public $min_stay;
    public $max_stay;
    public $check_in_time;
    public $check_out_time;

    public function mount()
    {
        $rule = $this->property->pricingRule;

        $this->min_stay = $rule->min_stay ?? 1;
        $this->max_stay = $rule->max_stay ?? null;
        $this->check_in_time = $rule->check_in_time ? $rule->check_in_time->format('H:i') : null;
        $this->check_out_time = $rule->check_out_time ? $rule->check_out_time->format('H:i') : null;
    }

    public function save()
    {
        $validated = $this->validate([
            'min_stay' => 'required|integer|min:1',
            'max_stay' => 'nullable|integer|gte:min_stay',
            'check_in_time' => 'nullable|date_format:H:i',
            'check_out_time' => 'nullable|date_format:H:i',
        ]);

        $rule = $this->property->pricingRule;

        if (!$rule) {
            $rule = new PropertyPricingRule();
            $rule->property_id = $this->property->id;
        }

        $rule->min_stay = $validated['min_stay'];
        $rule->max_stay = $validated['max_stay'];
        $rule->check_in_time = $validated['check_in_time'];
        $rule->check_out_time = $validated['check_out_time'];
        $rule->save();

        session()->flash('message', 'Pricing rules updated successfully.');
    }

    public function render()
    {
        return view('livewire.property-pricing-rule-manager');
    }
}
