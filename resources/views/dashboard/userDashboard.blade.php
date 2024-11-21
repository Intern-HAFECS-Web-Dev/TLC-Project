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
                    <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/' . $user->profile_image) }}"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ $user->user->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ $user->user->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href{{ route('userProfile.index') }}"
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
                        <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-xl text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8"
                            type="button">
                            Ikut Sekarang
                        </button>

                        <!-- Main modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 pb-5">
                                    <!-- Modal header -->
                                    <div class="p-4 md:p-5  text-center">
                                        <img src="images/popupfile.png" class="h-20 mx-auto my-2" alt="">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Harap unggah file Sertifikat Part X pada form di bawah ini sebagai
                                            persyaratan wajib.
                                        </h3>

                                    </div>
                                    <div class="container mx-auto w-3/4 border shadow-lg">
                                        <h1 class="text-xl font-semibold py-3 text-center lg:text-start lg:p-5">Unggah
                                            Sertifikat</h1>
                                        <hr class="border-black mx-auto mb-5 w-full">
                                        <div class="flex items-center justify-center w-full mx-auto p-3">
                                            <label for="dropzone-file"
                                                class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                    </svg>
                                                    <p
                                                        class="mb-2 sm:text-center text-sm text-gray-500 dark:text-gray-400">
                                                        <span class="font-semibold">Drag & Drop or click </span> to
                                                        upload
                                                        “Sertifikat Part X” <span class="text-red-500 font-bold">Format
                                                            Berupa PDF</span>
                                                    </p>
                                                </div>
                                                <input id="dropzone-file" type="file" class="hidden" />
                                            </label>
                                        </div>
                                        <div
                                            class="flex items-center justify-center p-4 md:p-5 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="default-modal" type="button"
                                                class="text-white hover:text-white border bg-biru border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Confirm
                                                <button data-modal-hide="default-modal" type="button"
                                                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Cancel</button>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
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
                        <div class="md:pb-14 pb-8">
                            <h5 class="font-semibold">Persyaratan:</h5>
                            <p>Telah bergabung dengan LMS dan memiliki
                                sertifikat part 2 LMS dan sertifikat level A</p>
                        </div>

                        <h5 class="font-semibold">Keuntungan:</h5>
                        <p>Mendapatkan Sertifikasi Level B</p>

                        <button type="button"
                            class="text-white bg-[#0C548C] cursor-not-allowed hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8">Ikut
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
                            class="text-white bg-[#0C548C] cursor-not-allowed hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center mt-8">Ikut
                            Sekarang</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- End PriceList --}}

        {{-- Tutorial --}}
        <div class="px-3 mt-8">
            <div class="container mx-auto bg-white shadow-lg mb-10">
                <h3 class="text-center py-5 md:text-start lg:text-start px-3 text-xl font-semibold lg:text-2xl">
                    Tutorial</h3>
                <hr class="border-black w-full mx-auto mb-5">

                <div class="pb-5">
                    <iframe src="https://www.youtube.com/embed/00o1vJYTp4I?si"
                        class="rounded w-full h-48 px-5 md:h-72 md:px-10 lg:px-20 lg:h-96 mb-5"
                        frameborder="0"></iframe>

                    <a href="https://wa.me/yourphone" target="_blank"
                        class="flex items-center justify-center w-40 h-12 mx-auto mb-10 lg:w-48 lg:h-20 bg-green-500 text-white font-semibold rounded-full hover:bg-green-600">
                        <!-- Icon WhatsApp -->
                        <svg class="w-5 h-5 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M20.52 3.48A11.946 11.946 0 0012 0C5.371 0 0 5.371 0 12a11.946 11.946 0 003.48 8.52l-1.14 4.38 4.38-1.14A11.946 11.946 0 0012 24c6.629 0 12-5.371 12-12 0-3.22-1.265-6.256-3.48-8.52zm-8.52 19.2a9.683 9.683 0 01-5.06-1.431l-.363-.216-2.591.675.694-2.56-.235-.372A9.696 9.696 0 012.4 12a9.6 9.6 0 019.6-9.6c5.305 0 9.6 4.295 9.6 9.6s-4.295 9.6-9.6 9.6zm5.145-7.114c-.281-.14-1.666-.823-1.922-.918-.256-.094-.444-.14-.632.14-.187.28-.725.918-.89 1.103-.165.187-.326.21-.606.07-.28-.14-1.179-.434-2.243-1.384-.83-.74-1.389-1.656-1.55-1.936-.165-.28-.018-.432.123-.57.128-.127.28-.327.419-.49.14-.165.187-.28.28-.465.093-.187.047-.351-.023-.49-.07-.14-.632-1.522-.868-2.086-.23-.558-.465-.483-.632-.483-.165 0-.351-.023-.535-.023-.187 0-.49.07-.748.35-.256.28-.98.96-.98 2.336 0 1.374 1.003 2.704 1.145 2.89.14.187 1.967 3.01 4.776 4.216.67.29 1.191.465 1.6.605.671.213 1.28.183 1.758.11.536-.08 1.665-.68 1.902-1.334.233-.65.233-1.212.163-1.334-.07-.12-.256-.187-.537-.327z" />
                        </svg>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
        {{-- End Tutorial --}}

        {{-- Footer --}}
        <footer class="dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class=" hover:underline">About</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Careers</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Brand Center</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Discord Server</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Licensing</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">iOS</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Android</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Windows</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">MacOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                    <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2024 <a
                            href="https://flowbite.com/">Teaching Learning Certificate</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 21 16">
                                <path
                                    d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        {{-- End Footer --}}
    </main>
</body>

</html>
