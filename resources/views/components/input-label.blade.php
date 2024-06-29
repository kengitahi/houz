@props(['value'])

<label
    {{ $attributes->merge(['class' => 'inline-flex px-1 pt-2  text-md font-medium transition duration-150 ease-in-out text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
