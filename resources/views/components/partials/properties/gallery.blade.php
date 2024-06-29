<div class="relative -z-10 mx-auto w-full" data-carousel="slide" id="gallery">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-[25rem]">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img alt=""
                class="absolute left-1/2 top-1/2 block h-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                src="{{ asset('storage/property-imgs/img1.jpeg') }}">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img alt=""
                class="absolute left-1/2 top-1/2 block h-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                src="{{ asset('storage/property-imgs/img2.jpeg') }}">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img alt=""
                class="absolute left-1/2 top-1/2 block h-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                src="{{ asset('storage/property-imgs/img3.jpg') }}">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img alt=""
                class="absolute left-1/2 top-1/2 block h-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                src="{{ asset('storage/property-imgs/img1.jpeg') }}">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img alt=""
                class="absolute left-1/2 top-1/2 block h-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                src="{{ asset('storage/property-imgs/img2.jpeg') }}">
        </div>
    </div>
    <!-- Slider controls -->
    <button
        class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
        data-carousel-prev type="button">
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-red-500 group-hover:bg-red-600 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg aria-hidden="true" class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" fill="none"
                viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1 1 5l4 4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button
        class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
        data-carousel-next type="button">
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-red-500 group-hover:bg-red-600 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg aria-hidden="true" class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" fill="none"
                viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                <path d="m1 9 4-4-4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
    <!-- Slider indicators -->
    <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
        <img aria-current="true" aria-label="Slide 1" class="h-16 w-16 cursor-pointer rounded-lg"
            data-carousel-slide-to="0" src="{{ asset('storage/property-imgs/img1.jpeg') }}" />
        <img aria-current="false" aria-label="Slide 2" class="h-16 w-16 cursor-pointer rounded-lg"
            data-carousel-slide-to="1" src="{{ asset('storage/property-imgs/img2.jpeg') }}" />
        <img aria-current="false" aria-label="Slide 3" class="h-16 w-16 cursor-pointer rounded-lg"
            data-carousel-slide-to="2" src="{{ asset('storage/property-imgs/img3.jpg') }}" />
        <img aria-current="false" aria-label="Slide 4" class="h-16 w-16 cursor-pointer rounded-lg"
            data-carousel-slide-to="3" src="{{ asset('storage/property-imgs/img1.jpeg') }}" />
        <img aria-current="false" aria-label="Slide 5" class="h-16 w-16 cursor-pointer rounded-lg"
            data-carousel-slide-to="4" src="{{ asset('storage/property-imgs/img2.jpeg') }}" />
    </div>
</div>
