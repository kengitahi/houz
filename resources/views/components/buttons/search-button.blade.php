@props(['active'])

@php
$classes =
$active ?? false
? 'inline-flex font-bold items-center px-1 pt-1 border-b-2 border-red-600 text-md font-medium leading-5 text-gray-900
focus:outline-none focus:red-700 transition duration-150 ease-in-out bg-red-500'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-medium leading-5 hover:text-red-700
hover:border-red-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out
text-gray-900 dark:border-gray-700 dark:text-white dark:hover:text-white md:hover:bg-transparent
md:dark:hover:bg-transparent';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>