@extends('layouts.navbar')
@section('content')
    <p class="bg-biru h-36"></p>

    <main class="container mx-auto mb-10 mt-10">
        <div class="px-3">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="lg:text-xl font-semibold text-gray-900 px-5 pt-5 mb-2">Kuis</h1>
                <p class="lg:text-base text-sm font-normal text-gray-900 px-5 mb-2">Daftar kategori kuis yang akan anda kerjakan.</p>
                <hr class="border-gray-400 w-full mx-auto mb-5">
                <div class="flex text-center justify-center md:justify-start lg:justify-start gap-2 text-sm mb-3 px-3">
                    <a href="" class="bg-[#2E4D69] text-white w-16 py-2 rounded-full">Semua</a>
                    <a href="" class="bg-[#E1E0F1] w-24 py-2 rounded-full">Terbuka</a>
                    <a href="" class="bg-[#E1E0F1] w-20 py-2 rounded-full">Terkunci</a>
                </div>
                <div class="lg:flex lg:px-auto lg:flex-wrap lg:justify-center gap-x-8 gap-y-6 gap-1 py-8 px-4">
                    <div class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image" class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="px-4 lg:py-2 pt-2 pb-0 flex justify-between">
                            <h3 class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">Kategori : Literasi</h3>
                                <button type="button" onclick="window.location.href='{{ route('kategoriLevel.index') }}';"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 lg:w-24 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mulai
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                                </button>
                        </div>
                    </div>

                    <div class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image" class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="px-4 lg:py-2 pt-2 pb-0 flex justify-between">
                            <h3 class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">Kategori : Numerasi</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 lg:w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image" class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="px-4 lg:py-2 pt-2 pb-0 flex justify-between">
                            <h3 class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">Kategori : PCK</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 lg:w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Terkunci
                                <i class="fas fa-lock ms-2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                        <img src="https://via.placeholder.com/400x200" alt="Category Image" class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                        <div class="px-4 lg:py-2 pt-2 pb-0 flex justify-between">
                            <h3 class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">Kategori : HOTS</h3>
                            <button type="button"
                                class="pt-1.5 md:py-auto md:pt-2 w-20 lg:w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
