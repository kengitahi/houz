<section class="bg-gray-700 bg-center bg-no-repeat bg-cover bg-blend-multiply"
    style="background-image: url({{ asset('storage/imgs/home-bg.jpg') }})">
    <div class="max-w-screen-xl px-4 pt-32 pb-24 mx-auto lg:py-56">
        <p class="mb-2 text-center text-white capitalize">The Best Way To</p>
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl lg:text-6xl">
            Find Your
            Dream Home</h1>
        <p class="mb-8 text-lg font-normal text-center text-gray-300 sm:px-16 lg:px-48 lg:text-xl">We have more than
            75,000
            properties to chose from.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <livewire:forms.home-search />
        </div>
    </div>
</section>