@extends('layouts.navbar')
@section('content')
    <p class="bg-biru h-36"></p>

    <main class="container mx-auto mt-10 mb-10">
        <div class="px-3">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="px-5 pt-5 mb-2 font-semibold text-gray-900 lg:text-xl">Kuis</h1>
                <p class="px-5 mb-2 text-sm font-normal text-gray-900 lg:text-base">Daftar kategori kuis yang akan anda
                    kerjakan.</p>
                <hr class="w-full mx-auto mb-5 border-gray-400">
                <div class="flex justify-center gap-2 px-3 mb-3 text-sm text-center md:justify-start lg:justify-start">
                    <a href="" class="bg-[#2E4D69] text-white w-16 py-2 rounded-full">Semua</a>
                    <a href="" class="bg-[#E1E0F1] w-24 py-2 rounded-full">Terbuka</a>
                    <a href="" class="bg-[#E1E0F1] w-20 py-2 rounded-full">Terkunci</a>
                </div>
                <div class="gap-1 px-4 py-8 lg:flex lg:px-auto lg:flex-wrap lg:justify-center gap-x-8 gap-y-6">
                    <div
                        class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image"
                            class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                            <h3
                                class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                Kategori : Literasi</h3>
                            {{-- <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mulai
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                                </button> --}}


                            <!-- Modal toggle -->
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mulai
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>

                            <!-- Main modal -->
                            <div id="default-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full p-4">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-center p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                PERHATIAN!!!
                                            </h3>

                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 space-y-4 md:p-5">
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                Dengan menekan tombol 'Mulai', Anda setuju bahwa waktu tes akan otomatis berjalan hingga selesai atau batas waktu habis. Pastikan persiapan Anda lengkap, termasuk koneksi internet stabil dan perangkat mendukung, karena waktu tidak dapat dijeda. Periksa sisa waktu secara berkala agar dapat menyelesaikan tes dengan optimal, karena akses akan ditutup otomatis saat waktu habis.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center justify-center gap-2 p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                                            <button data-modal-hide="default-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-base font-medium text-red-900 focus:outline-none bg-white rounded-lg border border-red-200 hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 ">Batalkan</button>
                                            <button data-modal-hide="default-modal" type="button"
                                                class="text-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base  px-5 py-2.5 text-center ">Konfirmasi
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div
                        class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image"
                            class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                            <h3
                                class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                Kategori : Numerasi</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-24  text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image"
                            class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                            <h3
                                class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                Kategori : PCK</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image"
                            class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                            <h3
                                class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                Kategori : HOTS</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
@endsection
