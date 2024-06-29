<?php

namespace App\Livewire\Testing;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Test extends Component
{
    public $locations = [];

    public $searchLocation = ''; //name

    public $purpose = '';

    public $hitsPerPage = 20;

    public $page = 0;

    public $sort = 'city-score-level';

    public $rentFrequency = ''; //monthly|yearly|weekly|daily

    public $category = ''; //|->Apartment<-|->Townhouse<-|->Villa<-|->Penthouse<-|->Hotel Apartment<-|->Villa Compound<-|->Residential Plot<-|->Residential Floor<-|->Residential Building<-|->Office<-|->Shop<-|->Warehouse<-|->Labour camp<-|->Commercial Villa<-|->Bulk Unit<-|->Commercial Plot<-|->Commercial Floor<-|->Commercial Building<-|->Factory<-|->Industrial Land<-|->Mixed Use Land<-|->Showroom<-|->Other Commercial<-|

    public $roomsMin = '';

    public $roomsMax = '';

    public $bathsMin = '';

    public $bathsMax = '';

    public $priceMin = '';

    public $priceMax = '';

    public $furnished = '';

    public function getLocations($searchLocation)
    {
        if ($searchLocation !== '') {
            $this->locations = $this->getPropertyLocations($searchLocation);
        } else {
            $this->locations = [];
        }
    }

    public function getPropertyLocations($query)
    {
        $data = Http::withHeaders([
            'x-rapidapi-host' => 'bayut-com1.p.rapidapi.com',
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => 'https://bayut-com1.p.rapidapi.com/',
            'query' => $query,
            'hitsPerPage' => $this->hitsPerPage,
        ])
            ->get('{+endpoint}auto-complete?query={query}&hitsPerPage={hitsPerPage}&page={page}')
            ->json();

        return $data['hits'];
    }

    public function getSearchedProperties()
    {
        $data = Http::withHeaders([
            'x-rapidapi-host' => 'bayut-com1.p.rapidapi.com',
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => 'https://bayut-com1.p.rapidapi.com/',
            'name' => $this->searchLocation,
            'purpose' => $this->purpose,
            'rentFrequency' => $this->rentFrequency,
            'hitsPerPage' => $this->hitsPerPage,
        ])
            ->get('{+endpoint}properties/list?name={name}&purpose={purpose}&rentFrequency={rentFrequency}&hitsPerPage={hitsPerPage}&page={page}&category={category}&roomsMin={roomsMin}&roomsMax={roomsMax}&bathsMin={bathsMin}&bathsMax={bathsMax}&priceMin={priceMin}&priceMax={priceMax}&furnished={furnished}')
            ->json();

        dd($data);
    }

    public function render()
    {
        return view(
            'livewire.testing.test',
        )->title('Testing | Homez');
    }
}
