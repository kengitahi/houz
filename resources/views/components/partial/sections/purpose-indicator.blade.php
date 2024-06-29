@props(['purpose'])

@php

    dd($purpose);

@endphp

@if ($purpose == 'for-sale')
    <p class="w-fit rounded-lg bg-green-500 p-2 text-sm font-semibold capitalize text-white">
        For Sale
    </p>
@else
    <p class="w-fit rounded-lg bg-blue-500 p-2 text-sm font-semibold capitalize text-white">
        For rent
    </p>
@endif
