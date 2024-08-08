<?php

namespace App\Livewire\Properties;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Single extends Component
{

    public $property;
    public $propertyId;
    public function mount($propertyId)
    {
        $this->propertyId = $propertyId;
        $data = Http::withHeaders([
            'x-rapidapi-host' => config('services.rapidapi.host'),
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => "https://" . config('services.rapidapi.host'),
            'propertyId' => $this->propertyId
        ])
            ->get("{+endpoint}/properties/detail?externalID={propertyId}&lang=en")
            ->json();

        $this->property = $data;

        // dd($this->property);
    }

    public function render()
    {
        return view('livewire.properties.single', ['property' => $this->property]);
    }
}
