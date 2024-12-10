@extends('layouts.navbar')

@section('content')
    <main class="container mx-auto my-20">
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">

            <!-- Right Content -->
            <div class="col-span-full xl:col-auto">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="bg-biru py-3 flex flex-col items-center justify-center md:flex-col md:space-y-4 space-y-4 sm:space-y-0 sm:flex-row xl:flex-col xl:space-y-4">
                        <img class="h-24 rounded-full shadow-sm object-cover"
                            src="{{ asset('/storage/' . $user->profile_image) }}" alt="Bonnie image" />

                        <div class="text-center sm:text-left xl:text-center 2xl:text-left">
                            <span class="block text-white text-xl font-bold dark:text-white">
                                {{ $user->user->name }}
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4 space-y-1">
                        <a href="{{ route('userProfile.index') }}">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-md w-full hover:bg-[#BCDEF8]">
                                <img src="images/svg/profile.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                Profil
                            </button>
                        </a>
                        <a href="{{ route('myCertification.index') }}">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-biru bg-[#BCDEF8] rounded-md w-full hover:bg-blue-100">
                                <img src="images/svg/mycertificate.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                Sertifikatku
                            </button>
                        </a>
                        <form action="{{ route('logout') }}" method="post" id="logout-form">
                            @csrf
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-md w-full hover:bg-[#BCDEF8]"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="images/svg/logout.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Sertifikat</h3>
                    <div class="flex text-center justify-center md:justify-start lg:justify-start gap-2 text-sm mb-3 px-3">
                        <a href="" class="bg-[#2E4D69] text-white w-16 rounded-full">All</a>
                        <a href="" class="bg-[#E1E0F1] w-16 rounded-full">Unlock</a>
                        <a href="" class="bg-[#E1E0F1] w-16 rounded-full">Lock</a>
                    </div>
                    <hr class="border-gray-400 w-full mx-auto mb-2">
                    <a href="#"
                        class="flex flex-col p-3 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        {{-- <img class="object-cover w-full rounded-t-lg h-64 md:h-48 md:w-auto lg:h-48 lg:w-auto md:rounded-none md:rounded-s-lg"
                            src="images/konten_satu.jpg" alt=""> --}}
                        <img class="object-cover w-full rounded-t-lg h-64 md:h-44 md:w-1/2 lg:w-1/2 lg:h-44 md:rounded-none md:rounded-s-lg"
                            src="images/konten_satu.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Sertifikat Level A
                            </h5>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                ID: L4PQ1LOY4XO1
                            </p>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                Diberikan pada: Aug 26, 2024
                            </p>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                Berlaku sampai: Aug 26, 2027
                            </p>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                Bagikan Sertifikat:
                            </p>
                            <ul class="flex ">
                                <li>
                                    <img src="images/logo.svg" class="h-8" alt="">
                                </li>
                                <li>
                                    <img src="images/logo.svg" class="h-8" alt="">
                                </li>
                                <li>
                                    <img src="images/logo.svg" class="h-8" alt="">
                                </li>
                            </ul>
                        </div>
                    </a>


                </div>
            </div>

        </div>
    </main>
@endsection
