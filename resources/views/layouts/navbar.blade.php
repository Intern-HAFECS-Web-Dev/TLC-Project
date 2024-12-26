<!DOCTYPE html>
<html lang="en" class="scroll-pt-28">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>

<body class="bg-abu">
    <nav class="fixed top-0 z-50 w-full bg-white border-gray-200 shadow-md dark:bg-gray-900 ">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.svg" class="my-auto h-14" alt="TLC Logo">
            </a>
            <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/' . $user->profile_image) }}"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ $user->user->name ?? '' }}</span>
                        <span
                            class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ $user->user->email ?? '' }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('userProfile.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">MyProfile</a>
                        </li>
                        <li>
                            <a href="{{ route('myCertification.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">MyCertification</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post" id="logout-form" class="inline">
                                @csrf
                                <a href="#" title=""
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('userDashboard.index') }}"
                            class="block py-2 px-3 rounded md:p-0
            {{ Request::routeIs('userDashboard.index') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('sertifikasi.index') }}"
                            class="block py-2 px-3 rounded md:p-0
            {{ Request::routeIs('sertifikasi.index') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            Sertifikasi</a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}"
                            class="block py-2 px-3 rounded md:p-0
            {{ Request::routeIs('transaksi.index') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            Transaksi</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="border-t border-gray-200 bg-gray-50 dark:bg-gray-900 dark:border-gray-700">
    <div class="w-full max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- Section 1: Logo dan Informasi -->
            <div>
                <img src="images/logo.svg" class="h-10 mb-4" alt="Logo">
                <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                    <li>UNIT HAFECS YHC</li>
                    <li>Jl. Trans, Sungai Lumbah, Kec. Alalak, Kabupaten Barito Kuala, Kalimantan Selatan, Indonesia</li>
                    <li>+62***-****-****</li>
                    <li>team@google.com</li>
                </ul>
                <p class="mt-6 text-xs text-gray-400 dark:text-gray-500">
                    © 2024 <a href="https://flowbite.com/" class="hover:underline">Teaching Learning Certificate</a>. All Rights Reserved.
                </p>
            </div>

            <!-- Section 2: Company -->
            <div>
                <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Instagram</a></li>
                    <li><a href="#" class="hover:underline">Youtube</a></li>
                </ul>
            </div>

            <!-- Section 3: Help Center -->
            <div>
                <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help Center</h2>
                <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                    <li><a href="#" class="hover:underline">Facebook</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Section 4: Legal -->
            <div>
                <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')

</html>
