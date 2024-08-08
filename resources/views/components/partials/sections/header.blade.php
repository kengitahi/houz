@props(['title', 'subtitle'])
<div {{ $attributes->merge(['class' => '']) }}>
    <h2 class ='text-grey-800 my-4 text-lg font-extrabold capitalize md:text-2xl lg:text-3xl'>
        {{ $title }}
    </h2>
    @if (!empty($subtitle))
        <p class = 'text-md mb-8 font-normal text-gray-600 lg:text-lg'>
            {{ $subtitle }}
        </p>
    @endif

</div>
