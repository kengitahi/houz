<?php

namespace App\Livewire\Cards;

use Livewire\Component;

class PropertyCard extends Component
{
    public $type;
    public $property;

    public function mount($property)
    {
        $this->property = $property;
    }

    public function render()
    {
        return view('livewire.cards.property-card', ['type' => $this->type]);
    }
}
