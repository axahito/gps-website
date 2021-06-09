<nav class="bg-white border-b border-gray-100 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 text-gray-500 hover:text-gray-700 text-sm font-medium leading-5">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('home') }}">
                        {{-- <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" /> --}}
                        <img class="h-12 w-28" src="{{ asset('/images/gps_logo.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('home') }}"
                       class="{{ request()->routeIs('home') ? 'border-purple-400 text-gray-900 focus:border-purple-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Home') }}
                    </a>
                    <a href="{{ route('profile') }}"
                        class="{{ request()->routeIs('profile') ? 'border-purple-400 text-gray-900 focus:border-purple-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Profile') }}
                    </a>
                    <a href="{{ route('product') }}"
                        class="{{ request()->routeIs('product') ? 'border-purple-400 text-gray-900 focus:border-purple-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Product') }}
                    </a>
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'border-purple-400 text-gray-900 focus:border-purple-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Gallery') }}
                    </a>
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'border-purple-400 text-gray-900 focus:border-purple-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Contact') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
