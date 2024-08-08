@props(['icon', 'name', 'number'])

<div class="flex items-center gap-1 rounded-md border-[1px] border-gray-200 px-4 py-2 text-sm">
    <img class="h-4" src="{{ asset('storage/icons/' . $icon) }}" />
    @if (Str::length($number) > 3)
        <span class="mt-[3px] capitalize">
            @php
                echo round($number, 2);
            @endphp
            M<sup>2</sup></span>
    @else
        <span class="mt-[3px] capitalize">{{ $number }} {{ $name }}</span>
    @endif
</div>
