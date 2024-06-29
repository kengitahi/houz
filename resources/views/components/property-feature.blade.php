@props(['icon', 'name'])

<div class="flex items-center gap-1 rounded-md border-[1px] border-gray-200 px-4 py-2 text-sm">
    <img class="h-4" src="{{ asset('storage/icons/' . $icon) }}" />
    <span class="mt-[3px] capitalize"> | {{ $name }}</span>
</div>
