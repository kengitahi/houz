<?php

namespace App\Livewire\Properties;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.properties.index')->title('All Properties | Homez');
    }
}
