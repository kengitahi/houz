@props(['title'])

<h3 {{ $attributes->merge(['class' => 'text-grey-800 my-2 text-xl font-extrabold capitalize md:text-2xl lg:text-3xl']) }}
    style='letter-spacing:1px'>
    {{ $title }}
</h3>
