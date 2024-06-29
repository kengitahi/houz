<div class="container flex flex-col pt-20">
    <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent='getSearchedProperties'>
        <div class="flex flex-row items-center gap-4">
            <div>
                <x-partials.sections.form-title title='Location' />
                <x-text-input class="fancy-tailwind-things" list="locationOptions" type="text" name="location"
                    wire:model="searchLocation" x-on:input.debounce.500ms="$wire.getLocations($wire.searchLocation)"
                    placeholder="Enter location">
                </x-text-input>
                <datalist id="locationOptions">
                    @foreach ($locations as $location)
                    <option data-value="{{ $location['name'] }}" value="{{ $location['name'] }}"
                        wire:key="{{ $location['id'] }}">
                    </option>
                    @endforeach
                </datalist>
            </div>
            <div>
                <x-partials.sections.form-title title='Price' />
                <x-text-input wire:model='priceMin' placeholder="Minumum price" type="number" />
                <x-text-input wire:model='priceMax' placeholder="Maximum price" type="number" />
            </div>
        </div>


        <div class="flex flex-row gap-4">
            <div>
                <x-partials.sections.form-title title='Category' />
                <div x-data="{ purposeButton: '' }" class="flex gap-2">
                    <button type="button" @click="purposeButton = 'forSale'" wire:click="$set('purpose', 'for-sale')"
                        class="px-4 py-2 border-[1px]"
                        :class="{'w-fit rounded-lg bg-green-500 text-lg font-semibold capitalize text-white': purposeButton === 'forSale', 'w-fit rounded-lg  p-2 text-lg font-semibold capitalize text-gray-900 border-green-800 border-[1px]': purposeButton !== 'forSale' }">
                        For Sale
                    </button>
                    <button type="button" @click="purposeButton = 'forRent'" wire:click="$set('purpose', 'for-rent')"
                        class="px-4 py-2 border-[1px]"
                        :class="{'w-fit rounded-lg bg-red-500 text-lg font-semibold capitalize text-white': purposeButton === 'forRent', 'w-fit rounded-lg  p-2 text-lg font-semibold capitalize text-gray-900 border-red-500 border-[1px]': purposeButton !== 'forRent' }">
                        For Rent
                    </button>
                </div>
                @if ($purpose == "for-sale")
                @elseif ($purpose == "for-rent")
                <div>
                    <x-partials.sections.form-title title='Rent frequency' class="text-sm" />
                    <select wire:model='rentFrequency'>
                        <option disabled class="capitalize">Choose how often to pay rent</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                        <option value="weekly">Weekly</option>
                        <option value="daily">Daily</option>
                    </select>
                </div>

                @endif
            </div>

            <div>
                <x-partials.sections.form-title title='Property Type' />
                <select wire:model='category'>
                    <option disabled>Pick a Property Type
                    <option value="apartment">Apartment</option>
                    <option value="townhouse">Townhouse</option>
                    <option value="villa">Villa</option>
                    <option value="penthouse">Penthouse</option>
                    <option value="hotel apartment">Hotel Apartment</option>
                    <option value="villa compound">Villa Compound</option>
                    <option value="residential plot">Residential Plot</option>
                    <option value="residential floor">Residential Floor</option>
                    <option value="residential building">Residential Building</option>
                </select>
            </div>

            <div>
                <x-partials.sections.form-title title='Furnished' />
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-1">
                        <input id="furnished" type="radio" value="furnished" wire:model="furnished" name="furnished">
                        <label for="furnished">Furnished</label>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="unfurnished" type="radio" value="unfurnished" wire:model="furnished"
                            name="furnished">
                        <label for="unfurnished">Unfurnished</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center gap-4">
            <div>
                <x-partials.sections.form-title title='Number of rooms' />
                <x-text-input wire:model='roomsMin' placeholder="Minumum number of rooms" type="number"
                    lable="Minimum" />
                <x-text-input wire:model='roomsMax' placeholder="Maximum number of rooms" type="number" />
            </div>

            <div>
                <x-partials.sections.form-title title='Number of Bathrooms' />
                <x-text-input wire:model='bathsMin' placeholder="Minumum number of bathrooms" type="number" />
                <x-text-input wire:model='bathsMax' placeholder="Maximum number of bathrooms" type="number" />
            </div>
        </div>
        <x-partials.sections.form-button>Search</x-partials.sections.form-button>
    </form>
</div>