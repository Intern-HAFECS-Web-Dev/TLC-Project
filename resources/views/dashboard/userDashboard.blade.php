<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- resource css tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>

<body class="bg-abu">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.svg" class="h-14 my-auto" alt="TLC Logo">
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/' . $user->profile_image) }}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ $user->user->name }}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ $user->user->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
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
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('sertifikasi.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sertifikasi</a>
                    </li>

                    <li>
                        <a href="{{ route('transaksi.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Transaksi</a>
                    </li>
                    <li class="lg:hidden md:hidden">

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="container mx-auto ">
        {{-- Carousel --}}
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-40 md:h-96 overflow-hidden rounded-lg lg:h-[600px]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/userdashboard.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/userdashboard.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
            </div>
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        {{-- End Carousel --}}

        {{-- Activity --}}
        <div class="px-3 mt-3">
            <div class="grid grid-cols-5 mt-5 lg:bg-white lg:shadow-xl">
                <div class="col-span-5 hidden lg:block">
                    <h1 class="text-lg font-semibold text-gray-900 dark:text-white p-3">Aktivitas</h1>
                    <hr class="border-gray-400 w-full mx-auto">
                </div>
                <div class="col-span-5 lg:col-span-3 bg-white shadow-xl lg:shadow-none">
                    <div class="lg:hidden">
                        <h1 class="text-lg font-semibold text-gray-900 dark:text-white p-3">Aktivitas</h1>
                        <hr class="border-gray-400 w-full mx-auto">
                    </div>

                    <ol class="relative border-s m-8 border-gray-200 dark:border-gray-700">
                        <li class="mb-10 ms-6">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </span>
                            <time class="block mb-2 text-sm font-normal leading-none">Released
                                on December 7th, 2021</time>
                            <div class="bg-white shadow-lg rounded p-2">
                                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tes Level A
                                </h3>
                                <p class="text-base font-normal">Tersisa X hari lagi. Mohon segera selesaikan tes
                                    sebelum waktu habis.</p>
                            </div>
                        </li>
                        <li class="mb-10 ms-6">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </span>
                            <time class="block mb-2 text-sm font-normal leading-none">Released
                                on December 7th, 2021</time>
                            <div class="bg-white shadow-lg rounded p-2">
                                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tes Level B
                                </h3>
                                <p class="text-base font-normal">Tersisa X hari lagi. Mohon segera selesaikan tes
                                    sebelum waktu habis.</p>
                            </div>
                        </li>
                    </ol>

                </div>
                <div class="hidden col-span-2 lg:block pt-3 mx-auto">
                    <img src="images/userdashboard2.png" class="h-60" alt="">
                </div>
            </div>
        </div>
        {{-- End Activity --}}

        {{-- Pricelist --}}
        <div class="bg-biru mt-5">
            <div class="text-center">
                <h5 class="text-kuning text-sm font-medium md:text-base lg:text-lg pt-5">Special Price</h5>
                <h1 class="text-white text-xl lg:text-4xl font-bold">Sertifikasi TLC by HAFECS</h1>
            </div>
            <div class="pb-2 px-4 pt-5 md:flex md:gap-3 ">
                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="container mx-auto">
                        <h5 class="text-2xl md:text-xl font-semibold">Sertifikasi Level A</h5>
                        <p>3 Bulan</p>
                        <div class="text-end mt-3">
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                        </div>
                        <hr class="border-black w-full mx-auto mb-5">
                        <div class="md:pb-14 pb-8">
                            <h5 class="font-semibold">Persyaratan:</h5>
                            <p>Telah bergabung dengan LMS dan memiliki sertifikasi part 1 LMS</p>
                        </div>

                        <h5 class="font-semibold">Keuntungan:</h5>
                        <p>Mendapatkan Sertifikasi Level A</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8">Ikut
                            Sekarang</button>
                    </div>
                </div>

                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="container mx-auto">
                        <h5 class="text-2xl md:text-xl font-semibold">Sertifikasi Level B</h5>
                        <p>3 Bulan</p>
                        <div class="text-end mt-3">
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                        </div>
                        <hr class="border-black w-full mx-auto mb-5">
                        <div class="pb-8">
                            <h5 class="font-semibold">Persyaratan:</h5>
                            <p>Telah bergabung dengan LMS dan memiliki
                                sertifikat part 2 LMS dan sertifikat level A</p>
                        </div>

                        <h5 class="font-semibold">Keuntungan:</h5>
                        <p>Mendapatkan Sertifikasi Level B</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-xl text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8 ">Ikut
                            Sekarang</button>
                    </div>
                </div>

                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="container mx-auto">
                        <h5 class="text-2xl md:text-xl font-semibold">Sertifikasi Level C</h5>
                        <p>3 Bulan</p>
                        <div class="text-end mt-3">
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                        </div>
                        <hr class="border-black w-full mx-auto mb-5">
                        <div class="pb-8">
                            <h5 class="font-semibold">Persyaratan:</h5>
                            <p class="text-wrap">Telah bergabung dengan LMS dan memiliki
                                sertifikat part 3 LMS dan sertifikat level A & B</p>
                        </div>

                        <h5 class="font-semibold">Keuntungan:</h5>
                        <p>Mendapatkan Sertifikasi Level C</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8">Ikut
                            Sekarang</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- End PriceList --}}

        {{-- Tutorial --}}
        <div class="px-3 mt-8">
            <div class="container mx-auto bg-white shadow-lg mb-10">
                <h3 class="text-center py-5 md:text-start lg:text-start px-3 text-xl font-semibold lg:text-2xl">Tutorial</h3>
                <hr class="border-black w-full mx-auto mb-5">

                <div class="pb-5">
                <iframe src="https://www.youtube.com/embed/00o1vJYTp4I?si" class="rounded w-full h-48 px-5 md:h-72 md:px-10 lg:px-20 lg:h-96 mb-5"
                    frameborder="0"></iframe>

                <a href="https://wa.me/yourphone" target="_blank"
                    class="flex items-center justify-center w-40 h-12 mx-auto mb-10 lg:w-48 lg:h-20 bg-green-500 text-white font-semibold rounded-full hover:bg-green-600">
                    <!-- Icon WhatsApp -->
                    <svg class="w-5 h-5 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M20.52 3.48A11.946 11.946 0 0012 0C5.371 0 0 5.371 0 12a11.946 11.946 0 003.48 8.52l-1.14 4.38 4.38-1.14A11.946 11.946 0 0012 24c6.629 0 12-5.371 12-12 0-3.22-1.265-6.256-3.48-8.52zm-8.52 19.2a9.683 9.683 0 01-5.06-1.431l-.363-.216-2.591.675.694-2.56-.235-.372A9.696 9.696 0 012.4 12a9.6 9.6 0 019.6-9.6c5.305 0 9.6 4.295 9.6 9.6s-4.295 9.6-9.6 9.6zm5.145-7.114c-.281-.14-1.666-.823-1.922-.918-.256-.094-.444-.14-.632.14-.187.28-.725.918-.89 1.103-.165.187-.326.21-.606.07-.28-.14-1.179-.434-2.243-1.384-.83-.74-1.389-1.656-1.55-1.936-.165-.28-.018-.432.123-.57.128-.127.28-.327.419-.49.14-.165.187-.28.28-.465.093-.187.047-.351-.023-.49-.07-.14-.632-1.522-.868-2.086-.23-.558-.465-.483-.632-.483-.165 0-.351-.023-.535-.023-.187 0-.49.07-.748.35-.256.28-.98.96-.98 2.336 0 1.374 1.003 2.704 1.145 2.89.14.187 1.967 3.01 4.776 4.216.67.29 1.191.465 1.6.605.671.213 1.28.183 1.758.11.536-.08 1.665-.68 1.902-1.334.233-.65.233-1.212.163-1.334-.07-.12-.256-.187-.537-.327z" />
                    </svg>
                    Hubungi Kami
                </a>
                </div>
            </div>
        </div>
        {{-- End Tutorial --}}
    </main>
</body>

</html>
