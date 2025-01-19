@extends('layouts.navbar')
@section('content')
    <p class="bg-biru h-36"></p>

    <main class="container mx-auto mt-10 mb-10">
        <div class="px-3">
            <div class="pb-5 bg-white shadow-xl">
                <h1 class="px-5 pt-5 mb-2 font-semibold text-gray-900 lg:text-xl">Kuis</h1>
                <div class="flex justify-between px-5 mb-2">
                    <p class="text-sm font-normal text-gray-900 lg:text-base">Daftar kategori kuis yang akan anda
                        kerjakan.</p>
                    <a href="{{ route('cek.nilai.index') }}" class="bg-biru hover:bg-blue-700 hover:text-white text-white uppercase p-2 rounded-lg">Nilai</a>
                </div>
                <hr class="w-full mx-auto mb-5 border-gray-400">
                <div class="flex justify-center gap-2 px-3 mb-3 text-sm text-center md:justify-start lg:justify-start">
                    <a href="" class="bg-[#2E4D69] text-white w-16 py-2 rounded-full">Semua</a>
                    <a href="" class="bg-[#E1E0F1] w-24 py-2 rounded-full">Terbuka</a>
                    <a href="" class="bg-[#E1E0F1] w-20 py-2 rounded-full">Terkunci</a>
                </div>
                <div class="gap-1 px-4 py-8 lg:flex lg:px-auto lg:flex-wrap lg:justify-center gap-x-8 gap-y-6">


                    @forelse ($categories as $categori)
                        <div
                            class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                            <img src="{{ Storage::url($categori->image_categori) }}" alt="Category Image"
                                class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                            <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                                <h3
                                    class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                    {{ $categori->name }} </h3>


                                    @php
                                    // Cek apakah ada jawaban pengguna untuk kategori ini
                                    $userAnswer = $categori->questions->flatMap(function($question) {
                                        return $question->userAnswers;
                                    })->firstWhere('user_id', Auth::id());
                                @endphp

                                @if ($userAnswer && $userAnswer->sesion_exam == 1)
                                <button type="button" class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                    Selesai

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="rtl:rotate-180 w-4 h-4 ms-2">
                                        <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                      </svg>

                                </button>
                                @else
                                    @if ($categori->is_locked == false)
                                    <button type="button"
                                    class="pt-1.5 md:py-auto md:pt-2 w-24  text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                    Terkunci
                                    <i class="fas fa-lock ms-2"></i>
                                </button>
                                    @else
                                    <button data-modal-target="default-modal{{ $categori->id }}" data-modal-toggle="default-modal{{ $categori->id }}"
                                        class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Mulai
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                    @endif
                                @endif

                                    {{-- jika belom pernah ujian ke 1 --}}
                                    {{-- <button data-modal-target="default-modal{{ $categori->id }}" data-modal-toggle="default-modal{{ $categori->id }}"
                                        class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Mulai
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button> --}}

                                    {{-- jika sudah pernah ujian ke 1 dan belom lulus dan ini akan jadi ujian ke 2nya/remidi --}}

                                    {{-- <button data-modal-target="default-modal{{ $categori->id }}" data-modal-toggle="default-modal{{ $categori->id }}"
                                        class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Mulai 2
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button> --}}

                                    {{-- jika sudah pernah ujian ke 2 dan belom lulus --}}

                                    {{-- <button data-modal-target="default-modal{{ $categori->id }}" data-modal-toggle="default-modal{{ $categori->id }}"
                                        class="pt-1.5 md:py-auto md:pt-2 w-20 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Mulai 3
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button> --}}

                                    {{-- jika lulus  --}}


                                <!-- Main modal -->
                                <div id="default-modal{{ $categori->id }}" tabindex="-1" aria-hidden="true"
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
                                                    Dengan menekan tombol 'Mulai', Anda setuju bahwa waktu tes akan otomatis
                                                    berjalan hingga selesai atau batas waktu habis. Pastikan persiapan Anda
                                                    lengkap, termasuk koneksi internet stabil dan perangkat mendukung,
                                                    karena
                                                    waktu tidak dapat dijeda. Periksa sisa waktu secara berkala agar dapat
                                                    menyelesaikan tes dengan optimal, karena akses akan ditutup otomatis
                                                    saat
                                                    waktu habis.
                                                </p>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center justify-center gap-2 p-4 border-t border-gray-200 rounded-b md:p-5 ">
                                                <button data-modal-hide="default-modal{{ $categori->id }}" type="button"
                                                    class="py-2.5 px-5 ms-3 text-base font-medium text-red-900 focus:outline-none bg-white rounded-lg border border-red-200 hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 ">Batalkan</button>
                                                <button data-modal-hide="default-modal{{ $categori->id }}" type="button"
                                                {{-- @foreach ($categori->soal as  )

                                                @endforeach --}}
                                                {{-- onclick="window.location.href='{{ route('soal.index', $categori ) }}'" --}}
                                                {{-- tes2 --}}
                                                onclick="window.location.href='{{ route('soal.tes2', $categori ) }}'"
                                                    class="text-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base  px-5 py-2.5 text-center ">Konfirmasi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="flex items-center justify-center h-screen">
                            <div class="text-3xl font-bold text-gray-900 dark:text-white">
                                Belum ada soal yang tersedia
                            </div>
                        </div>
                    @endforelse



                    {{-- <div
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
                    </div> --}}


                </div>
            </div>
        </div>
    </main>
@endsection
