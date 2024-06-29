<div class="bg-white border border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
    <div class="flex justify-center p-5">
        <a href="{{ $link }}">
            <img alt="" class="rounded-t-lg" src="{{ asset('storage/' . $icon) }}" />
        </a>
    </div>

    <div class="p-5">
        <a href="{{ $link }}">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $title }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ $description }}
        </p>
        <a class="inline-flex items-center px-4 py-2 text-sm font-semibold text-center text-gray-900 border-2 border-gray-900 rounded-lg hover:bg-gray-900 hover:font-medium hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-900 dark:bg-gray-900 dark:hover:text-gray-900 dark:focus:ring-gray-900"
            href="{{ $link }}">
            {{ $buttonText }}
            <svg aria-hidden="true" class="ms-2 h-3.5 w-3.5 rtl:rotate-180" fill="none" viewBox="0 0 14 10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" />
            </svg>
        </a>
    </div>
</div>
