<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('resources/css/template.css') }}">
    @yield('link')
    <title>INTRIC</title>
</head>

<body>

    <nav class="bg-gray-800 fixed w-full top-0 z-50">

        <div class="mx-auto max-w-8xl px-2 sm:px-6 lg:px-40">

            <div class="relative flex h-20 items-center justify-between">

                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>

                </div>

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                    <div class="flex flex-shrink-0 items-center">

                        <img class="h-12 w-auto" src="{{ asset('resources/images/Logo Transparent White.png') }}"
                            alt="Your Company">

                    </div>

                    <div class="hidden sm:ml-6 sm:block">

                        <div class="flex space-x-4">

                            <a href="{{ route('home') }}"
                                class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">Home</a>
                            <a href="{{ route('product.show') }}"
                                class="{{ request()->is('product') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">Product</a>
                            <a href="{{ route('about') }}"
                                class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">About</a>
                            @auth
                                @if (Auth::user()->isCustomer() || Auth::user()->isSuperadmin())
                                    {{-- <a href="https://www.jotform.com/form/231542125038447" --}}
                                    <a href="{{ route('pesanan.index') }}"
                                        class="{{ request()->is('pesanan_index') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">Order</a>
                                @endif
                                @if (Auth::user()->isSuperadmin())
                                <a href="{{ route('admin.list') }}"
                                    class="{{ request()->is('list_admin') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">List Admin</a>
                            @endif
                                @if (Auth::user()->isAdmin())
                                    <a href="{{ route('product.list') }}"
                                        class="{{ request()->is('product/product_list') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">List
                                        Produk</a>
                                    <a href="{{ route('pesanan.list') }}"
                                        class="{{ request()->is('pesanan/pesanan_list') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-xl font-medium">List
                                        Pesanan</a>
                                @endif

                            @endauth
                        </div>

                    </div>

                </div>

                <ul class="navbar-nav ms-auto text-white flex flex-row gap-10 text-xl font-medium">

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item hover:text-gray-400">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item hover:text-gray-400">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="relative ml-3">

                            <div class="flex flex-row">

                                <button type="button" id="profileButton"
                                    class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">

                                    <h2 class="block px-4 py-2 text-md text-gray-200">{{ Auth::user()->name }}</h2>

                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://static.vecteezy.com/system/resources/previews/013/331/127/original/account-avatar-dark-mode-glyph-ui-icon-personal-page-of-site-user-user-interface-design-white-silhouette-symbol-on-black-space-solid-pictogram-for-web-mobile-isolated-illustration-vector.jpg"
                                        alt="">

                                </button>

                            </div>

                            <div id="profileMenu"
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">

                                <h2 class="block px-4 py-2 text-md text-black">{{ Auth::user()->name }}</h2>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-500 hover:text-gray-800"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                                <a class="dropdown-item text-black block px-4 py-2 text-sm text-gray-500 hover:text-gray-800"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>

                        </div>
                    @endguest

                </ul>

            </div>

        </div>

        <div class="sm:hidden" id="mobile-menu">

            <div class="space-y-1 px-2 pb-3 pt-2">

                <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Home</a>
                <a href="/product"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Products</a>
                <a href="/about"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
                <a href="https://www.jotform.com/form/231542125038447"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Order</a>

            </div>

        </div>

    </nav>

    <div class="mt-20">

        @yield('content')

    </div>

    <footer class="relative py-20 flex flex-col items-center bg-cyan-900 overflow-hidden md:py-40">

        <div class="relative z-[1] container m-auto px-6 md:px-12">

            <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">

                <div class="flex flex-wrap items-center justify-between md:flex-nowrap">

                    <div class="w-full space-x-12 flex justify-center text-gray-300 sm:w-7/12 md:justify-start">

                        <ul class="list-disc list-inside space-y-8">

                            <li><a href="/" class="hover:text-sky-400 transition">Home</a></li>
                            <li><a href="/product" class="hover:text-sky-400 transition">Product</a></li>
                            <li><a href="/about" class="hover:text-sky-400 transition">About</a></li>
                            <li><a href="https://wa.me/082124187011" target="_blank"
                                    class="hover:text-sky-400 transition">Contact</a></li>

                        </ul>

                        <ul role="list" class="space-y-8">

                            <li>

                                <a href="https://wa.me/082124187011" target="_blank"
                                    class="flex items-center space-x-3 hover:text-sky-400 transition">
                                    <img class="w-5 h-5"
                                        src="https://seeklogo.com/images/W/whatsapp-logo-8AE44BBBB0-seeklogo.com.png"
                                        alt="wa icon">
                                    <span>WhatsUp</span>

                                </a>

                            </li>

                            <li>

                                <a href="https://www.instagram.com/intric.id/" target="_blank"
                                    class="flex items-center space-x-3 hover:text-sky-400 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                    <span>Instagram</span>

                                </a>

                            </li>

                        </ul>

                    </div>

                    <div class="w-10/12 m-auto  mt-16 space-y-6 text-center sm:text-left sm:w-5/12 sm:mt-auto">

                        <span class="block text-gray-300">We are the first detachable clothing in Indonesia!</span>

                        <span class="block text-gray-300">Bernicko Raphael & Widhyastanto Ramadhian © 2023</span>

                        <span class="block text-gray-300">Need help? <a href="https://wa.me/082124187011"
                                target="_blank" class="font-semibold text-white"> Contact Us</a></span>
                    </div>

                </div>

            </div>

        </div>

        <div aria-hidden="true" class="absolute h-full inset-0 flex items-center">

            <div aria-hidden="true"
                class="bg-layers bg-scale w-56 h-56 m-auto blur-xl bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 rounded-full md:w-[30rem] md:h-[30rem] md:blur-3xl">

            </div>

        </div>

        <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-[#020314] opacity-80"></div>

    </footer>

    <script src="{{ asset('resources/js/app.js') }}" defer></script>

</body>

</html>
