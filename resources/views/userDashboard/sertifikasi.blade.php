@extends('layouts.navbar')
@section('content')
    <p class="bg-biru h-36"></p>

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
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
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
                                                Dengan menekan tombol <span class="text-red-500">'Mulai'</span>, Anda setuju
                                                bahwa waktu tes akan otomatis berjalan hingga selesai atau batas waktu
                                                habis. Pastikan persiapan Anda lengkap, termasuk koneksi internet stabil dan
                                                perangkat mendukung, karena waktu tidak dapat dijeda. Periksa sisa waktu
                                                secara berkala agar dapat menyelesaikan tes dengan optimal, karena akses
                                                akan ditutup otomatis saat waktu habis.
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
@endsection
