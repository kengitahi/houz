<?php

namespace App\Livewire\Cards;

use Livewire\Component;

class PropertyCard extends Component
{
    public $type;

    public function render()
    {
        return view('livewire.cards.property-card', ['type' => $this->type]);
    }
}
