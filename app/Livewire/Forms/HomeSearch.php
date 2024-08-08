<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class HomeSearch extends Component
{
    public $property_type;

    public $locationError = [];

    public $locations = [];

    public $searchLocation = ''; //name

    public $purpose = 'for-rent';

    public $hitsPerPage = 30;

    public $page = 0;

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
            'x-rapidapi-host' => config('services.rapidapi.host'),
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => "https://" . config('services.rapidapi.host'),
            'query' => $query,
            'hitsPerPage' => $this->hitsPerPage,
        ])
            ->get('{+endpoint}/auto-complete?query={query}&hitsPerPage=20&page=1&lang=en')
            ->json();

        return $data['hits'];
    }

    public function getSearchedProperties()
    {
        if (count($this->locations) == 0) {
            $this->locationError = true;

            return;
        }

        $data = Http::withHeaders([
            'x-rapidapi-host' => config('services.rapidapi.host'),
            'x-rapidapi-key' => config('services.rapidapi.key'),
        ])->withUrlParameters([
            'endpoint' => "https://" . config('services.rapidapi.host'),
            'name' => $this->searchLocation,
            'purpose' => $this->purpose,
            'rentFrequency' => $this->rentFrequency,
            'hitsPerPage' => $this->hitsPerPage,
            'page' => $this->page,
        ])
            ->get('{+endpoint}/properties/list?name={name}&purpose={purpose}&rentFrequency={rentFrequency}&hitsPerPage={hitsPerPage}&page={page}&lang=en&sort=city-level-score&category={category}&roomsMin={roomsMin}&roomsMax={roomsMax}&bathsMin={bathsMin}&bathsMax={bathsMax}&priceMin={priceMin}&priceMax={priceMax}&furnished={furnished}')
            ->json();

        dd($data);
    }

    public function render()
    {
        return view('livewire.forms.home-search');
    }
}
