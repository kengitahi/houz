<div class="w-full rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
    <div class="flex items-center gap-4 px-5 pb-2 pt-5">
        <a href="#">
            <img alt="" class="h-12 rounded-full border-[2px] border-red-500"
                src="{{ asset('storage/imgs/avatar.avif') }}" />
        </a>
        <div class="flex flex-col gap-0">
            <a class="block text-lg text-gray-900 hover:text-red-500 hover:underline dark:text-white" href="#">Agent
                name</a>
            <a class="block truncate text-lg text-gray-500 hover:text-red-500 hover:underline dark:text-gray-400"
                href="mailto:agent@agent.com">Agent email</a>
        </div>
    </div>
    <div class="px-5 py-2">
        <h3 class="text-xl font-bold capitalize tracking-tight text-gray-900 dark:text-white">
            Send me a message</h3>
        <form action="">
            <x-input-label placeholder="Name">Your Name</x-input-label>
            <x-text-input class="w-full"></x-text-input>
            <x-input-label placeholder="Email">Your Email Address</x-input-label>
            <x-text-input class="w-full" type='email'></x-text-input>
            <x-input-label placeholder="Message...">Your Message</x-input-label>
            <textarea class='w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500'
                id="" name="" required></textarea>
            <x-primary-button class="pt-2">Send Message</x-primary-button>
        </form>
    </div>
</div>
