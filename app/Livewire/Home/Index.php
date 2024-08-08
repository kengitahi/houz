<?php

namespace App\Livewire\Home;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{

    public $properties;

    public $hitsPerPage = 30;
    public $page = 0;


    public function mount()
    {
        $data = Http::withHeaders([
            'x-rapidapi-host' => config('services.rapidapi.host'),
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => "https://" . config('services.rapidapi.host'),
            'hitsPerPage' => $this->hitsPerPage,
            'page' => $this->page,
        ])
            ->get('{+endpoint}/properties/list?locationExternalIDs=5002%2C6020&hitsPerPage={hitsPerPage}&page={page}&lang=en&sort=city-level-score')
            ->json();

        $this->properties = $data['hits'];
    }
    public function render()
    {
        return view('livewire.home.index', ['properties' => $this->properties]);
    }
}
