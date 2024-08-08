<div class="max-w-lg rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
    <div class="flex flex-col gap-40 rounded-t-lg bg-cover bg-center bg-no-repeat p-5"
        style="background-image: url({{ $property['coverPhoto']['url'] }})">
        <div class="align-center flex justify-between">
            <p class="w-fit rounded-lg bg-red-500 p-2 text-sm font-semibold capitalize text-white">
                @if ($property['product'] = 'superhot')
                    Featured.
                @endif
            </p>

            @if ($property['purpose'] == 'for-sale')
                <p class="w-fit rounded-lg bg-green-500 p-2 text-sm font-semibold capitalize text-white">
                    For Sale
                </p>
            @else
                <p class="w-fit rounded-lg bg-blue-500 p-2 text-sm font-semibold capitalize text-white">
                    For rent
                </p>
            @endif
        </div>

        @if ($property['purpose'] = 'for-rent')
            <p class="w-fit rounded-lg bg-gray-900 p-2 text-sm capitalize text-white">
                AED
                @php
                    echo number_format($property['price'], 0, '.', ',');
                @endphp
                {{ $property['rentFrequency'] }}
            </p>
        @else
            <p class="w-fit rounded-lg bg-gray-900 p-2 text-sm capitalize text-white">
                AED
                @php
                    echo number_format($property['price'], 0, '.', ',');
                @endphp
        @endif

    </div>
    <div class="rounded-b-lg p-5">
        <a href="{{ route('singleProperty', $property['externalID']) }}">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $property['title'] }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            @foreach ($property['location'] as $location)
                {{ $location['name'] }} |
            @endforeach
        </p>
        <div class="mb-3 flex flex-wrap gap-3 font-normal text-gray-700 dark:text-gray-400">
            @if (!empty($property['rooms']))
                <x-property-feature :number="$property['rooms']" icon="house.png" name="rooms" />
            @endif
            @if (!empty($property['baths']))
                <x-property-feature :number="$property['baths']" icon="house.png" name="baths" />
            @endif
            @if (!empty($property['garages']))
                <x-property-feature :number="$property['garages']" icon="house.png" name="garages" />
            @endif
            @if (!empty($property['area']))
                <x-property-feature :number="$property['area']" icon="house.png" name="area" />
            @endif
        </div>
        <a class="inline-flex items-center rounded-lg border-2 border-gray-900 px-4 py-2 text-center text-sm font-semibold text-gray-900 hover:bg-gray-900 hover:font-medium hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-900 dark:bg-gray-900 dark:hover:text-gray-900 dark:focus:ring-gray-900"
            href="{{ route('singleProperty', $property['externalID']) }}">
            See Property
            <svg aria-hidden="true" class="ms-2 h-3.5 w-3.5 rtl:rotate-180" fill="none" viewBox="0 0 14 10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" />
            </svg>
        </a>
    </div>
</div>
