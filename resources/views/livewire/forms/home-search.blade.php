<div class="mx-auto rounded-lg bg-white p-5" style="width:80%">
    <form class="divide-y divide-gray-200" wire:submit.prevent='getSearchedProperties'>
        <x-partials.sections.title class="text-sm" title="Search Properties for sale or rent." />
        <div class="flex flex-col justify-between gap-4 py-4 md:flex-row lg:items-center">
            <div class="w-full md:w-1/2">
                <x-partials.sections.form-title title='Location' />
                <x-text-input class="w-full" list="locationOptions" name="location" placeholder="Enter location"
                    type="text" value="{{ $searchLocation }}" wire:click="$set('locationError', '')"
                    wire:model="searchLocation" x-on:input.debounce.500ms="$wire.getLocations($wire.searchLocation)">
                </x-text-input>
                <datalist id="locationOptions">
                    @foreach ($locations as $location)
                        <option data-value="{{ $location['externalID'] }}" value="{{ $location['name'] }}"
                            wire:key="{{ $location['externalID'] }}">
                            {{ $location['name'] }}
                        </option>
                    @endforeach
                </datalist>
                @if ($locationError == true)
                    <p class="text-red-800">Please choose a location</p>
                @endif
            </div>
            <div class="w-full md:w-1/2">
                <x-partials.sections.form-title title='Price' />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input class="w-full md:w-1/2" placeholder="Minimum price" type="number"
                        wire:model='priceMin' />
                    <x-text-input class="w-full md:w-1/2" placeholder="Maximum price" type="number"
                        wire:model='priceMax' />
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-4 py-4 md:grid md:grid-cols-2 lg:grid-cols-3">
            <div class="w-full">
                <x-partials.sections.form-title title='Category' />
                <div class="flex flex-col gap-2 lg:flex-row" x-data="{ purposeButton: 'forRent' }">
                    <button
                        :class="{ 'w-fit rounded-md bg-green-500 text-md font-semibold capitalize text-white': purposeButton === 'forSale', 'w-fit rounded-md  p-2 text-md font-semibold capitalize text-gray-900 border-gray-300 border-[1px]': purposeButton !== 'forSale' }"
                        @click="purposeButton = 'forSale'" class="w-full border-[1px] px-4 py-2" type="button"
                        wire:click="$set('purpose', 'for-sale')">
                        For Sale
                    </button>
                    <button
                        :class="{ 'w-fit rounded-md bg-red-500 text-md font-semibold capitalize text-white': purposeButton === 'forRent', 'w-fit rounded-md  p-2 text-md font-semibold capitalize text-gray-900 border-gray-300 border-[1px]': purposeButton !== 'forRent' }"
                        @click="purposeButton = 'forRent'" class="w-full border-[1px] px-4 py-2" type="button"
                        wire:click="$set('purpose', 'for-rent')">
                        For Rent
                    </button>
                </div>
                @if ($purpose == 'for-sale')
                @elseif ($purpose == 'for-rent')
                    <div class="mt-4">
                        <x-partials.sections.form-title class="text-md" title='Rent frequency' />
                        <select wire:model='rentFrequency'
                            class="border=[1px] text-md w-full rounded-md border-gray-300 font-semibold capitalize text-gray-900"">
                            <option class="text-md font-semibold text-gray-900" selected>Choose how often to pay rent
                            </option>
                            <option class="text-md font-semibold text-gray-900" value="monthly">Monthly</option>
                            <option class="text-md font-semibold text-gray-900" value="yearly">Yearly</option>
                            <option class="text-md font-semibold text-gray-900" value="weekly">Weekly</option>
                            <option class="text-md font-semibold text-gray-900" value="daily">Daily</option>
                        </select>
                    </div>
                @endif
            </div>

            <div class="w-full">
                <x-partials.sections.form-title title='Property Type' />
                <select
                    class="border=[1px] text-md w-full rounded-md border-gray-300 font-semibold capitalize text-gray-900"
                    wire:model='category'>
                    <option class="text-md font-semibold text-gray-900" selected>Pick a Property Type
                    <option class="text-md font-semibold text-gray-900" value="apartment">Apartment</option>
                    <option class="text-md font-semibold text-gray-900" value="townhouse">Townhouse</option>
                    <option class="text-md font-semibold text-gray-900" value="villa">Villa</option>
                    <option class="text-md font-semibold text-gray-900" value="penthouse">Penthouse</option>
                    <option class="text-md font-semibold text-gray-900" value="hotel apartment">Hotel Apartment</option>
                    <option class="text-md font-semibold text-gray-900" value="villa compound">Villa Compound</option>
                    <option class="text-md font-semibold text-gray-900" value="residential plot">Residential Plot
                    </option>
                    <option class="text-md font-semibold text-gray-900" value="residential floor">Residential Floor
                    </option>
                    <option class="text-md font-semibold text-gray-900" value="residential building">Residential
                        Building</option>
                </select>
            </div>

            <div class="w-full">
                <x-partials.sections.form-title title='Furnished' />
                <div class="flex flex-col gap-2 lg:flex-row">
                    <div class="flex items-center gap-1">
                        <input id="furnished" name="furnished" type="radio" value="furnished" wire:model="furnished">
                        <label class="text-md font-semibold text-gray-900" for="furnished">Furnished</label>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="unfurnished" name="furnished" type="radio" value="unfurnished"
                            wire:model="furnished">
                        <label class="text-md font-semibold text-gray-900" for="unfurnished">Unfurnished</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex max-w-full flex-col justify-between gap-4 py-4 lg:flex-row lg:items-center">
            <div>
                <x-partials.sections.form-title title='Number of rooms' />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input class="w-full md:w-1/2" lable="Minimum" placeholder="Minimum rooms" type="number"
                        wire:model='roomsMin' />
                    <x-text-input class="w-full md:w-1/2" placeholder="Maximum rooms" type="number"
                        wire:model='roomsMax' />
                </div>
            </div>

            <div>
                <x-partials.sections.form-title title="number of Bathrooms" />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input class="w-full md:w-1/2" placeholder=" Minimum bathrooms" type="number"
                        wire:model='bathsMin' />
                    <x-text-input class="w-full md:w-1/2" placeholder="Maximum bathrooms" type="number"
                        wire:model='bathsMax' />
                </div>
            </div>
        </div>
        <x-partials.sections.form-button>Search</x-partials.sections.form-button>
    </form>
</div>
