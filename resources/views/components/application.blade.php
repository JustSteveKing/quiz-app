@props([
    'header' => 'Dashboard'
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <livewire:styles />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <div class="bg-indigo-600 pb-32">
            <nav x-data="{ open: false }" class="border-b border-indigo-300 border-opacity-25 bg-indigo-600 lg:border-none">
                <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
                        <div class="flex items-center px-2 lg:px-0">
                            <div class="flex-shrink-0">
                                <img class="block h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=300" alt="Your Company">
                            </div>
                            <div class="hidden lg:ml-10 lg:block">
                                <div class="flex space-x-4">

                                    <a href="#" class="bg-indigo-700 text-white rounded-md py-2 px-3 text-sm font-medium" aria-current="page" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-700 text-white&quot;, Default: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Dashboard</a>

                                    <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Team</a>

                                    <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Projects</a>

                                    <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Calendar</a>

                                    <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Reports</a>

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
                            <div class="w-full max-w-lg lg:max-w-xs">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative text-gray-400 focus-within:text-gray-600">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="search" class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-gray-900 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:text-sm sm:leading-6" placeholder="Search" type="search" name="search">
                                </div>
                            </div>
                        </div>
                        <div class="flex lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" class="inline-flex items-center justify-center rounded-md bg-indigo-600 p-2 text-indigo-200 hover:bg-indigo-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                <span class="sr-only">Open main menu</span>
                                <svg class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg>
                                <svg class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:ml-4 lg:block">
                            <div class="flex items-center">
                                <button type="button" class="flex-shrink-0 rounded-full bg-indigo-600 p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600">
                                    <span class="sr-only">View notifications</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div x-data="{ open: false }" @keydown.escape.stop="open = false" class="relative ml-3 flex-shrink-0">
                                    <div>
                                        <button type="button" class="flex rounded-full bg-indigo-600 text-sm text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        </button>
                                    </div>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">

                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Your Profile</a>

                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Settings</a>

                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign out</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-description="Mobile menu, show/hide based on menu state." class="lg:hidden" id="mobile-menu" x-show="open" style="display: none;">
                    <div class="space-y-1 px-2 pt-2 pb-3">

                        <a href="#" class="bg-indigo-700 text-white block rounded-md py-2 px-3 text-base font-medium" aria-current="page" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-700 text-white&quot;, Default: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Dashboard</a>

                        <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Team</a>

                        <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Projects</a>

                        <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Calendar</a>

                        <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">Reports</a>

                    </div>
                    <div class="border-t border-indigo-700 pt-4 pb-3">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium text-white">Tom Cook</div>
                                <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                            </div>
                            <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-indigo-600 p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 space-y-1 px-2">

                            <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Your Profile</a>

                            <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Settings</a>

                            <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Sign out</a>

                        </div>
                    </div>
                </div>
            </nav>
            <header class="py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">
                        {{ $header }}
                    </h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <livewire:scripts />
</body>
</html>
