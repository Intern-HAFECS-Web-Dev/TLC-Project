<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
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
                        <a href="{{ route('userDashboard.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('sertifikasi.index') }}"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500">Sertifikasi</a>
                    </li>

                    <li>
                        <a href="{{ route('transaksi.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <p class="bg-biru h-16"></p>
    <main class="container mx-auto mb-10">

        <div class="grid grid-cols-5 px-3 mt-10">
            <div class="bg-white shadow-xl px-3 col-span-5">
                <h1 class="text-xl font-bold p-3">Sertifikasi</h1>
                <p class="mb-5 px-3 text-left">Upgrade terus ilmu dan pengalaman
                    terbaru kamu di bidang teknologi</p>
                <hr class="py-5 border-black w-full mx-auto">
                <div class="flex text-center justify-center md:justify-start lg:justify-start gap-2 text-sm mb-3 px-3">
                    <a href="" class="bg-[#2E4D69] text-white w-16 rounded-full">All</a>
                    <a href="" class="bg-[#E1E0F1] w-16 rounded-full">Unlock</a>
                    <a href="" class="bg-[#E1E0F1] w-16 rounded-full">Lock</a>
                </div>

                <div class="col-span-5 my-3 mx-auto px-5">
                    <a href="#"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full lg:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="p-2 object-cover w-full h-auto rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                            src="images/sertif.png" alt="">

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 lg:text-xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Sertifikasi
                                TLC Level A: Dasar Pengajaran Efektif</h5>
                            <span class="flex">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-base">Testing</p>
                            </span>
                            <span class="flex mt-3">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-sm">999++ enrolls</p>
                            </span>
                            <p class="leading-normal mt-3">Ini akan diisi untuk penjelasan tentang level, dan test yang
                                akan di jalani </p>
                            {{-- <button type="button"
                                class="w-20 mt-3 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mulai
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button> --}}

                            <button data-modal-target="medium-modal" data-modal-toggle="medium-modal"
                                    class="w-20 mt-3 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mulai
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                                </button>
                                <!-- Default Modal -->
                            <div id="medium-modal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-lg max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                DISCLAIMER
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="medium-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                Dengan menekan tombol <span class="text-red-500">'Mulai'</span>, Anda setuju bahwa waktu tes akan otomatis berjalan hingga selesai atau batas waktu habis. Pastikan persiapan Anda lengkap, termasuk koneksi internet stabil dan perangkat mendukung, karena waktu tidak dapat dijeda. Periksa sisa waktu secara berkala agar dapat menyelesaikan tes dengan optimal, karena akses akan ditutup otomatis saat waktu habis.
                                            </p>

                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="medium-modal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Mulai</button>
                                            <button data-modal-hide="medium-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-span-5 my-3 mx-auto px-5">
                    <a href="#"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full lg:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="p-2 object-cover w-full h-auto rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                            src="images/sertif.png" alt="">

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 lg:text-xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Sertifikasi
                                TLC Level A: Dasar Pengajaran Efektif</h5>
                            <span class="flex">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-base">Testing</p>
                            </span>
                            <span class="flex mt-3">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-sm">999++ enrolls</p>
                            </span>
                            {{-- <p class="leading-normal mt-3">Disclaimer: Dengan menekan tombol 'Mulai', Anda menyetujui --}}
                            {{-- bahwa waktu pada tes ini akan otomatis dimulai dan terus berjalan hingga selesai atau
                                batas waktu habis. Pastikan Anda telah mempersiapkan diri sepenuhnya sebelum memulai
                                tes, termasuk memastikan koneksi internet yang stabil dan perangkat yang mendukung,
                                karena waktu akan terus berjalan dan tidak dapat dijeda. Kami menyarankan agar Anda
                                secara berkala memeriksa sisa waktu yang tersedia agar dapat menyelesaikan semua soal
                                dengan optimal. Jika waktu berakhir, akses ke tes akan otomatis ditutup.</p> --}}
                            <p class="leading-normal mt-3">Ini akan diisi untuk penjelasan tentang level, dan test yang
                                akan di jalani </p>

                            <button type="button"
                                class="w-24 mt-3 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </a>
                </div>

                <div class="col-span-5 my-3 mx-auto px-5 mb-10">
                    <a href="#"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full lg:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="p-2 object-cover w-full h-auto rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                            src="images/sertif.png" alt="">

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 lg:text-xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                Sertifikasi TLC Level A: Dasar Pengajaran Efektif
                            </h5>
                            <span class="flex">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-base">Testing</p>
                            </span>
                            <span class="flex mt-3">
                                <img class="h-6 rounded-full" src="images/logo.svg" alt="user photo">
                                <p class="self-center text-sm">999++ enrolls</p>
                            </span>
                            {{-- <p
                                class="leading-normal mt-3 text-sm sm:text-xs md:text-sm lg:text-base xl:text-lg text-opacity-15">
                                Disclaimer: Dengan menekan tombol 'Mulai', Anda menyetujui bahwa waktu pada tes ini akan
                                otomatis
                                dimulai dan terus berjalan hingga selesai atau batas waktu habis. Pastikan Anda telah
                                mempersiapkan diri
                                sepenuhnya sebelum memulai tes, termasuk memastikan koneksi internet yang stabil dan
                                perangkat yang
                                mendukung, karena waktu akan terus berjalan dan tidak dapat dijeda. Kami menyarankan
                                agar Anda secara
                                berkala memeriksa sisa waktu yang tersedia agar dapat menyelesaikan semua soal dengan
                                optimal. Jika
                                waktu berakhir, akses ke tes akan otomatis ditutup.
                            </p> --}}
                            <p class="leading-normal mt-3">Ini akan diisi untuk penjelasan tentang level, dan test yang
                                akan di jalani </p>
                            <button type="button"
                                class="w-24 mt-3 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>

                        </div>
                    </a>
                </div>


            </div>
        </div>

    </main>

    {{-- Footer --}}
    <footer class=" dark:bg-gray-900">
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
</body>

</html>
