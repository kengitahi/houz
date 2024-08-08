@php

@endphp

<div class="container grid gap-8 pt-24" style="grid-template-columns: 3fr 1fr;">
    <main>
        <x-partials.properties.gallery :images="$property['photos']" />
        <x-partials.sections.header :title="$property['title']" subtitle="" />
        <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400">
            Locations:
            @foreach ($property['location'] as $location)
                {{ $location['name'] }} |
            @endforeach
        </p>
        <p class="text-md mb-3 font-bold capitalize text-gray-700 dark:text-gray-400">
            AED
            @php
                echo number_format($property['price'], 0, '.', ',');
            @endphp
            @if ($property['purpose'] = 'for-rent')
                {{ $property['rentFrequency'] }}
            @endif
        </p>
        <x-partials.sections.title class="text-lg" title="Description" />

        <div>
            <p class="text-md font-normal text-gray-600 lg:text-lg">
                {!! $property['description'] !!}
            </p>
        </div>
        <x-partials.sections.title title="Features" />
        <div class="mb-3 flex flex-wrap gap-3 font-normal text-gray-700 dark:text-gray-400">
            @if (!empty($property['rooms']))
                <x-property-feature :number="$property['rooms']" icon="house.png" name="rooms" />
            @endif
            @if (!empty($property['baths']))
                <x-property-feature :number="$property['baths']" icon="house.png" name="bathrooms" />
            @endif
            @if (!empty($property['garages']))
                <x-property-feature :number="$property['garages']" icon="house.png" name="garages" />
            @endif
            @if (!empty($property['area']))
                <x-property-feature :number="$property['area']" icon="house.png" name="area" />
            @endif
        </div>
        {{-- <x-partials.properties.related /> --}}
    </main>
    <aside>
        <livewire:cards.agent />

    </aside>
</div>
