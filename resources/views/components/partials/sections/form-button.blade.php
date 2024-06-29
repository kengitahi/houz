<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 text-lg font-semibold
    text-center text-gray-900 border-2 border-gray-900 rounded-lg
    hover:bg-gray-900 hover:font-medium hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-900
    dark:bg-gray-900 dark:hover:text-gray-900 dark:focus:ring-gray-900 mb-4']) }} style="border: 2px solid rgb(17 24
    39)!important;">
    {{ $slot }} <svg aria-hidden="true" class="ms-2 h-3.5 w-3.5 rtl:rotate-180" fill="none" viewBox="0 0 14 10"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            stroke="currentColor" />
    </svg>
</button>