@extends('layouts.navbar')

@section('content')
    <main class="container mx-auto lg:mt-14 mt-10 max-w-7xl">
        {{-- Carousel --}}
        <div id="default-carousel" class="relative w-full mt-10" data-carousel="slide">
            <div class="relative h-60 md:h-96 overflow-hidden rounded-lg lg:h-[530px] xl:h-[600px]">
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

        </div>
        {{-- End Carousel --}}
        {{-- Activity --}}
        <div class="px-3">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="lg:text-2xl text-lg font-semibold text-gray-900 px-5 pt-5 mb-2">Aktivitas</h1>
                <p class="lg:text-base text-sm font-normal text-gray-900 px-5 mb-2">Informasi mengenai aktivitas yang
                    dilakukan selama proses sertifikasi.</p>
                <hr class="border-gray-400 w-full mx-auto mb-5">
                <div class="flex text-center justify-center md:justify-start lg:justify-start gap-2 text-sm mb-3 px-3">
                    <a href="" class="bg-[#2E4D69] text-white w-16 py-2 rounded-full">Semua</a>
                    <a href="" class="bg-[#E1E0F1] w-24 py-2 rounded-full">Mendatang</a>
                    <a href="" class="bg-[#E1E0F1] w-20 py-2 rounded-full">Terlewati</a>
                </div>
                <ol class="relative border-s m-8 border-gray-200">
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <time class="block mb-2 text-sm font-normal leading-none">7 Desember 2024</time>
                        <div class="bg-white shadow-lg rounded w-full lg:w-3/4 py-2 px-4">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tes Level A
                            </h3>
                            <p class="text-base font-normal">Dokumen Anda sedang dalam proses verifikasi. Harap tunggu
                                hingga maksimal 1x24 jam kerja</p>
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
                        <time class="block mb-2 text-sm font-normal leading-none">12 Desember 2024</time>
                        <div class="bg-white shadow-lg rounded w-full lg:w-3/4 py-2 px-4">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Tes Level B
                            </h3>
                            <p class="text-base font-normal">Anda dapat melakukan pembayaran ..............</p>
                        </div>
                    </li>
                </ol>

            </div>
        </div>
        {{-- End Activity --}}

        {{-- Pricelist --}}
        <div class="px-3 mt-10 lg:mt-14">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="lg:text-2xl text-lg font-semibold text-gray-900 px-5 pt-5 mb-2">Harga Sertifikasi</h1>
                <p class="lg:text-base text-sm font-normal text-gray-900 px-5 mb-2">Informasi lengkap mengenai biaya dan
                    pilihan harga sertifikasi</p>
                <hr class="border-gray-400 w-full mx-auto mb-5">
                {{-- Cards --}}
                <div class="md:flex md:flex-wrap px-5">
                    <div
                        class="mx-auto text-white mb-7 w-full md:max-w-xl md:max-h-[278px] p-4 bg-gradient-to-r from-[#5F809C] to-[#212C36] border border-gray-200 rounded-2xl shadow">
                        <div class="md:flex md:justify-between ">
                            <div class="md:text-start text-center">
                                {{-- Level A Name --}}
                                <h5 class="text-2xl md:text-xl font-semibold">
                                    {{ $levels[0]->name ? $levels[0]->name : '-' }}
                                </h5>

                                {{-- Level A Duration --}}
                                <p>
                                    {{ $levels[0]->duration ? $levels[0]->duration : '-' }}
                                    <span>
                                        Bulan
                                    </span>
                                </p>
                            </div>
                            <div class="md:text-end text-center mt-3 md:mt-0">
                                <h5 class="text-lg text-red-600 line-through">
                                    Rp <span>
                                        {{ $levels[0]->price ? number_format($levels[0]->price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                <h5 class="text-xl font-semibold mb-7">
                                    Rp <span>
                                        {{ $levels[0]->final_price ? number_format($levels[0]->final_price, 0, ',', '.') : '-' }}
                                    </span></h5>
                            </div>
                        </div>
                        <hr class="border-white md:w-1/2 w-full mb-3 md:ml-auto mx-auto md:mx-0 top-0 right-0">
                        <div class="md:flex md:justify-between">
                            <div class="md:text-start text-center">
                                {{-- Level A Persyaratan --}}
                                <p class="text-sm">Persyaratan: </p>
                                <p class="text-xs">
                                    {{ $levels[0]->condition ? $levels[0]->condition : '-' }}
                                </p>

                            </div>
                            <div class="md:text-end text-center">

                                <h5 class="text-sm">Keuntungan<span class="md:hidden lg:hidden xl:hidden">:</span></h5>
                                <p class="text-xs">
                                    {{ $levels[0]->benefit ? $levels[0]->benefit : '-' }}
                                </p>

                            </div>
                        </div>

                        @if (auth()->user()->hasPermissionTo('acces_level_A'))
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-white bg-[#FBCB04] hover:bg-yellow-500 font-medium rounded-xl text-base px-3 py-2 block w-52 text-center mt-8 mx-auto"
                                type="button">
                                Ikut Sekarang
                            </button>
                        @else
                            <p class="text-white text-center mt-8">Anda tidak memiliki akses untuk mendaftar.</p>
                        @endif

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
                    <div
                        class="mx-auto text-white mb-7 w-full md:max-w-xl md:max-h-[278px] p-4 bg-gradient-to-r from-[#5F809C] to-[#212C36] border border-gray-200 rounded-2xl shadow">
                        <div class="md:flex md:justify-between ">
                            <div class="md:text-start text-center">
                                {{-- Level B Name --}}
                                <h5 class="text-2xl md:text-xl font-semibold">
                                    {{ $levels[1]->name ? $levels[1]->name : '-' }}
                                </h5>

                                {{-- Level B Duration --}}
                                <p>
                                    {{ $levels[1]->duration ? $levels[1]->duration : '-' }}
                                    <span>Bulan</span>
                                </p>
                            </div>
                            <div class="md:text-end text-center mt-3 md:mt-0">
                                <h5 class="text-lg text-red-600 line-through">
                                    Rp <span>
                                        {{ $levels[1]->price ? number_format($levels[1]->price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                </h5>
                                <h5 class="text-xl font-semibold mb-7">
                                    Rp <span>
                                        {{ $levels[1]->final_price ? number_format($levels[1]->final_price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                </h5>
                            </div>
                        </div>
                        <hr class="border-white md:w-1/2 w-full mb-3 md:ml-auto mx-auto md:mx-0 top-0 right-0">
                        <div class="md:flex md:justify-between">
                            <div class="md:text-start text-center">
                                <p class="text-sm">Persyaratan: </p>

                                {{-- Level B Persyaratan --}}
                                <p class="text-xs">
                                    {{ $levels[1]->condition ? $levels[1]->condition : '-' }}
                                </p>
                            </div>
                            <div class="md:text-end text-center">
                                <h5 class="text-sm">Keuntungan<span class="md:hidden lg:hidden xl:hidden">:</span></h5>
                                <p class="text-xs">
                                    {{ $levels[1]->benefit ? $levels[1]->benefit : '-' }}
                                </p>
                            </div>
                        </div>

                        {{-- Button B --}}
                        @if (auth()->user()->hasPermissionTo('acces_level_B'))
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-white bg-[#FBCB04] hover:bg-yellow-500 font-medium rounded-xl text-base px-3 py-2 block w-52 text-center mt-8 mx-auto"
                                type="button">
                                Ikut Sekarang
                            </button>
                        @else
                            <p class="text-white text-center mt-8">Anda belum memiliki akses ke level B</p>
                        @endif

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
                    <div
                        class="mx-auto text-white mb-7 w-full md:max-w-xl md:max-h-[278px] p-4 bg-gradient-to-r from-[#5F809C] to-[#212C36] border border-gray-200 rounded-2xl shadow">
                        <div class="md:flex md:justify-between ">
                            <div class="md:text-start text-center">

                                {{-- Level C Name --}}
                                <h5 class="text-2xl md:text-xl font-semibold">
                                    {{ $levels[2]->name ? $levels[2]->name : '-' }}
                                </h5>
                                {{-- Level C Duration --}}
                                <p>
                                    {{ $levels[2]->duration ? $levels[2]->duration : '-' }}
                                    <span>Bulan</span>
                                </p>
                            </div>
                            <div class="md:text-end text-center mt-3 md:mt-0">
                                <h5 class="text-lg text-red-600 line-through">
                                    Rp <span>
                                        {{ $levels[2]->price ? number_format($levels[2]->price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                </h5>
                                <h5 class="text-xl font-semibold mb-7">
                                    Rp <span>
                                        {{ $levels[2]->final_price ? number_format($levels[2]->final_price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                </h5>
                            </div>
                        </div>
                        <hr class="border-white md:w-1/2 w-full mb-3 md:ml-auto mx-auto md:mx-0 top-0 right-0">
                        <div class="md:flex md:justify-between">
                            <div class="md:text-start text-center">
                                <p class="text-sm">Persyaratan: </p>

                                {{-- Level C Persyaratan --}}
                                <p class="text-xs">
                                    {{ $levels[2]->condition ? $levels[2]->condition : '-' }}
                                </p>
                            </div>
                            <div class="md:text-end text-center">
                                <h5 class="text-sm">Keuntungan<span class="md:hidden lg:hidden xl:hidden">:</span></h5>

                                {{-- Level C Benefit --}}
                                <p class="text-xs">
                                    {{ $levels[2]->benefit ? $levels[2]->benefit : '-' }}
                                </p>
                            </div>
                        </div>



                        {{-- Button C --}}
                        @if (auth()->user()->hasPermissionTo('acces_level_C'))
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-white bg-[#FBCB04] hover:bg-yellow-500 font-medium rounded-xl text-base px-3 py-2 block w-52 text-center mt-8 mx-auto"
                                type="button">
                                Ikut Sekarang
                            </button>
                        @else
                            <p class="text-white text-center mt-8">Anda belum memiliki akses ke level C</p>
                        @endif

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
                    <div
                        class="mx-auto text-white mb-7 w-full md:max-w-xl md:max-h-[278px] p-4 bg-gradient-to-r from-[#5F809C] to-[#212C36] border border-gray-200 rounded-2xl shadow">
                        <div class="md:flex md:justify-between ">
                            <div class="md:text-start text-center">

                                {{-- Paket Bundling Name --}}
                                <h5 class="text-2xl md:text-xl font-semibold">
                                    {{ $levels[3]->name ? $levels[3]->name : '-' }}
                                </h5>

                                {{-- Pake Bundling Duration --}}
                                <p>
                                    {{ $levels[3]->duration ? $levels[3]->duration : '-' }}
                                    <span>Bulan</span>
                                </p>
                            </div>
                            <div class="md:text-end text-center mt-3 md:mt-0">
                                <h5 class="text-lg text-red-600 line-through">
                                    Rp <span>
                                        {{ $levels[3]->price ? number_format($levels[3]->price, 0, ',', '.') : '-' }}
                                    </span></h5>
                                </h5>
                                <h5 class="text-xl font-semibold mb-7">Rp <span>
                                    {{ $levels[3]->final_price ? number_format($levels[3]->final_price, 0, ',', '.') : '-' }}
                                </span></h5></h5>
                            </div>
                        </div>
                        <hr class="border-white md:w-1/2 w-full mb-3 md:ml-auto mx-auto md:mx-0 top-0 right-0">
                        <div class="md:flex md:justify-between">
                            <div class="md:text-start text-center">
                                <p class="text-sm">Persyaratan: </p>

                                {{-- Level Bundling Condition --}}
                                <p class="text-xs">
                                    {{ $levels[3]->condition ? $levels[3]->condition : '-' }}
                                </p>
                            </div>
                            <div class="md:text-end text-center">
                                <h5 class="text-sm">Keuntungan<span class="md:hidden lg:hidden xl:hidden">:</span></h5>

                                {{-- Level Bundling Benefit --}}
                                <p class="text-xs">
                                    {{ $levels[3]->benefit ? $levels[3]->benefit : '-' }}
                                </p>
                            </div>
                        </div>

                        {{-- Button Bundling --}}
                        @if (auth()->user()->hasPermissionTo('bundling'))
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-white bg-[#FBCB04] hover:bg-yellow-500 font-medium rounded-xl text-base px-3 py-2 block w-52 text-center mt-8 mx-auto"
                                type="button">
                                Beli Sekarang
                            </button>
                        @else
                            <p class="text-white text-center mt-8">Paket Bundling Sudah Terbuka</p>
                        @endif

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
                {{-- Cards --}}
            </div>
        </div>
        {{-- End PriceList --}}

        {{-- Tutorial --}}
        <div class="px-3 my-10 lg:mt-14">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="lg:text-2xl text-lg font-semibold text-gray-900 px-5 pt-5 mb-2">Video Tutorial</h1>
                <p class="lg:text-base text-sm font-normal text-gray-900 px-5 mb-2">Dari Video ini akan dijelaskan tentang
                    skema dan tata cara sertifikasi</p>
                <hr class="border-gray-400 w-full mx-auto mb-5">
                <div
                    class="relative px-5 rounded-2xl overflow-hidden lg:w-[943px] w-64 md:w-3/4 md:h-60 h-36 mb-5 mx-auto lg:h-[430px] bg-black">
                    <iframe src="https://www.youtube.com/embed/00o1vJYTp4I?si" class="absolute inset-0 w-full h-full"
                        frameborder="0">
                    </iframe>
                </div>


                <div class="mx-auto md:flex md:items-center md:justify-center text-center gap-4 mb-10">
                    <p class="text-[#848A96] text-lg lg:text-xl font-semibold">Masih bingung?</p>
                    <a href="https://wa.me/yourphone" target="_blank"
                        class="text-base flex items-center justify-center w-40 h-12 bg-green-500 text-white font-semibold rounded-full hover:bg-green-600 mx-auto md:mx-0">
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

        {{-- Whatsapp --}}
        <a href="#" target="_blank"
            class="fixed w-14 h-14 bottom-10 right-4 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 z-50">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M20.52 3.48A11.946 11.946 0 0012 0C5.371 0 0 5.371 0 12a11.946 11.946 0 003.48 8.52l-1.14 4.38 4.38-1.14A11.946 11.946 0 0012 24c6.629 0 12-5.371 12-12 0-3.22-1.265-6.256-3.48-8.52zm-8.52 19.2a9.683 9.683 0 01-5.06-1.431l-.363-.216-2.591.675.694-2.56-.235-.372A9.696 9.696 0 012.4 12a9.6 9.6 0 019.6-9.6c5.305 0 9.6 4.295 9.6 9.6s-4.295 9.6-9.6 9.6zm5.145-7.114c-.281-.14-1.666-.823-1.922-.918-.256-.094-.444-.14-.632.14-.187.28-.725.918-.89 1.103-.165.187-.326.21-.606.07-.28-.14-1.179-.434-2.243-1.384-.83-.74-1.389-1.656-1.55-1.936-.165-.28-.018-.432.123-.57.128-.127.28-.327.419-.49.14-.165.187-.28.28-.465.093-.187.047-.351-.023-.49-.07-.14-.632-1.522-.868-2.086-.23-.558-.465-.483-.632-.483-.165 0-.351-.023-.535-.023-.187 0-.49.07-.748.35-.256.28-.98.96-.98 2.336 0 1.374 1.003 2.704 1.145 2.89.14.187 1.967 3.01 4.776 4.216.67.29 1.191.465 1.6.605.671.213 1.28.183 1.758.11.536-.08 1.665-.68 1.902-1.334.233-.65.233-1.212.163-1.334-.07-.12-.256-.187-.537-.327z" />
            </svg>
        </a>

        {{-- Whatsapp --}}
    </main>
@endsection
