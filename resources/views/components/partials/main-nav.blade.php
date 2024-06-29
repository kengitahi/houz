<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
<nav class="container border-gray-200">
    <div class="mx-auto flex flex-wrap items-center justify-between py-4">

        <x-partials.logo :href="route('home')"></x-partials.logo>

        <div class="flex items-center space-x-3 rtl:space-x-reverse md:order-2 md:space-x-0">
            @auth
                <button aria-expanded="false"
                    class="text-md flex items-center focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 md:me-0"
                    data-dropdown-placement="bottom" data-dropdown-toggle="user-dropdown" id="user-menu-button" type="button">
                    <span class="sr-only">Open user menu</span>
                    <img alt="user photo" class="h-8 w-8 rounded-full" src="{{ asset('storage/imgs/avatar.avif') }}">
                    <span class="ml-1 hidden md:flex">Hello, {{ auth()->user()->name }}.</span>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="text-md block text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                        <span
                            class="text-md block truncate text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul aria-labelledby="user-menu-button" class="py-2">
                        <li>
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                        </li>
                        <li>
                            <x-dropdown-link :href="route('profile')">
                                {{ __('Settings') }}
                            </x-dropdown-link>
                        </li>
                        <!-- Authentication -->
                        <button class="w-full text-start" wire:click="logout">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </ul>
                </div>
            @endauth
            <button aria-controls="navbar-user" aria-expanded="false"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                data-collapse-toggle="navbar-user" type="button">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="none" viewBox="0 0 17 14"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1h15M1 7h15M1 13h15" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        stroke="currentColor" />
                </svg>
            </button>
        </div>

        <div class="hidden w-full items-center justify-between gap-2 md:order-1 md:flex md:w-auto md:gap-0"
            id="navbar-user">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                <li>
                    <x-nav-link :active="request()->routeIs('home')" :href="route('home')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('about')" href="#" wire:navigate>
                        {{ __('About') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('allProperties')" :href="route('allProperties')" wire:navigate>
                        {{ __('Properties') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('blog')" href="#" wire:navigate>
                        {{ __('Blog') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :active="request()->routeIs('contact')" href="#" wire:navigate>
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>

                @guest
                    <li>
                        <x-nav-link :active="request()->routeIs('register')" :href="route('register')" wire:navigate>
                            {{ __('Register') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :active="request()->routeIs('login')" :href="route('login')" wire:navigate>
                            {{ __('Log In') }}
                        </x-nav-link>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
