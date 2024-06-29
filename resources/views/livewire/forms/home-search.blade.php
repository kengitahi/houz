<div class="p-5 mx-auto bg-white rounded-lg" style="width:80%">
    <form class="divide-y divide-gray-200" wire:submit.prevent='getSearchedProperties'>
        <x-partials.sections.title title="Search Properties for sale or rent." class="text-sm" />
        <div class="flex flex-col justify-between gap-4 py-4 md:flex-row lg:items-center">
            <div class="w-full md:w-1/2">
                <x-partials.sections.form-title title='Location' />
                <x-text-input class="w-full" list="locationOptions" type="text" name="location"
                    wire:model="searchLocation" x-on:input.debounce.500ms="$wire.getLocations($wire.searchLocation)"
                    placeholder="Enter location" wire:click="$set('locationError', '')">
                </x-text-input>
                <datalist id="locationOptions">
                    @foreach ($locations as $location)
                    <option data-value="{{ $location['externalID'] }}" value="{{ $location['name'] }}"
                        wire:key="{{ $location['externalID'] }}">
                    </option>
                    @endforeach
                </datalist>
                @if($locationError == true)
                <p class="text-red-800">Please choose a location</p>
                @endif
            </div>
            <div class="w-full md:w-1/2">
                <x-partials.sections.form-title title='Price' />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input wire:model='priceMin' placeholder="Minimum price" type="number"
                        class="w-full md:w-1/2" />
                    <x-text-input wire:model='priceMax' placeholder="Maximum price" type="number"
                        class="w-full md:w-1/2" />
                </div>
            </div>
        </div>


        <div class="flex flex-col justify-between gap-4 py-4 md:grid md:grid-cols-2 lg:grid-cols-3">
            <div class="w-full">
                <x-partials.sections.form-title title='Category' />
                <div x-data="{ purposeButton: 'forRent' }" class="flex flex-col gap-2 lg:flex-row">
                    <button type="button" @click="purposeButton = 'forSale'" wire:click="$set('purpose', 'for-sale')"
                        class="px-4 py-2 border-[1px] w-full"
                        :class="{'w-fit rounded-md bg-green-500 text-md font-semibold capitalize text-white': purposeButton === 'forSale', 'w-fit rounded-md  p-2 text-md font-semibold capitalize text-gray-900 border-gray-300 border-[1px]': purposeButton !== 'forSale' }">
                        For Sale
                    </button>
                    <button type="button" @click="purposeButton = 'forRent'" wire:click="$set('purpose', 'for-rent')"
                        class="px-4 py-2 border-[1px] w-full"
                        :class="{'w-fit rounded-md bg-red-500 text-md font-semibold capitalize text-white': purposeButton === 'forRent', 'w-fit rounded-md  p-2 text-md font-semibold capitalize text-gray-900 border-gray-300 border-[1px]': purposeButton !== 'forRent' }">
                        For Rent
                    </button>
                </div>
                @if ($purpose == "for-sale")
                @elseif ($purpose == "for-rent")
                <div class="mt-4">
                    <x-partials.sections.form-title title='Rent frequency' class="text-md" />
                    <select wire:model='rentFrequency'
                        class="w-full border=[1px] border-gray-300 rounded-md text-md font-semibold capitalize text-gray-900"">
                        <option selected class="font-semibold text-gray-900  text-md">Choose how often to pay rent
                        </option>
                        <option value="monthly" class="font-semibold text-gray-900 text-md">Monthly</option>
                        <option value="yearly" class="font-semibold text-gray-900 text-md">Yearly</option>
                        <option value="weekly" class="font-semibold text-gray-900 text-md">Weekly</option>
                        <option value="daily" class="font-semibold text-gray-900 text-md">Daily</option>
                    </select>
                </div>

                @endif
            </div>

            <div class="w-full">
                <x-partials.sections.form-title title='Property Type' />
                <select wire:model='category'
                    class="w-full border=[1px] border-gray-300 rounded-md text-md font-semibold capitalize text-gray-900">
                    <option selected class="font-semibold text-gray-900 text-md">Pick a Property Type
                    <option value="apartment" class="font-semibold text-gray-900 text-md">Apartment</option>
                    <option value="townhouse" class="font-semibold text-gray-900 text-md">Townhouse</option>
                    <option value="villa" class="font-semibold text-gray-900 text-md">Villa</option>
                    <option value="penthouse" class="font-semibold text-gray-900 text-md">Penthouse</option>
                    <option value="hotel apartment" class="font-semibold text-gray-900 text-md">Hotel Apartment</option>
                    <option value="villa compound" class="font-semibold text-gray-900 text-md">Villa Compound</option>
                    <option value="residential plot" class="font-semibold text-gray-900 text-md">Residential Plot
                    </option>
                    <option value="residential floor" class="font-semibold text-gray-900 text-md">Residential Floor
                    </option>
                    <option value="residential building" class="font-semibold text-gray-900 text-md">Residential
                        Building</option>
                </select>
            </div>

            <div class="w-full">
                <x-partials.sections.form-title title='Furnished' />
                <div class="flex flex-col gap-2 lg:flex-row">
                    <div class="flex items-center gap-1">
                        <input id="furnished" type="radio" value="furnished" wire:model="furnished" name="furnished">
                        <label for="furnished" class="font-semibold text-gray-900 text-md">Furnished</label>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="unfurnished" type="radio" value="unfurnished" wire:model="furnished"
                            name="furnished">
                        <label for="unfurnished" class="font-semibold text-gray-900 text-md">Unfurnished</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between max-w-full gap-4 py-4 lg:items-center lg:flex-row">
            <div>
                <x-partials.sections.form-title title='Number of rooms' />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input wire:model='roomsMin' placeholder="Minimum rooms" type="number" lable="Minimum"
                        class="w-full md:w-1/2" />
                    <x-text-input wire:model='roomsMax' placeholder="Maximum rooms" type="number"
                        class="w-full md:w-1/2" />
                </div>
            </div>

            <div>
                <x-partials.sections.form-title title="number of Bathrooms" />
                <div class="flex flex-col gap-2 md:flex-row">
                    <x-text-input wire:model='bathsMin' placeholder=" Minimum bathrooms" type="number"
                        class="w-full md:w-1/2" />
                    <x-text-input wire:model='bathsMax' placeholder="Maximum bathrooms" type="number"
                        class="w-full md:w-1/2" />
                </div>
            </div>
        </div>
        <x-partials.sections.form-button>Search</x-partials.sections.form-button>
    </form>
</div>