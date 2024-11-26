@extends('layouts.navbar')

@section('content')
    <main class="container mx-auto my-20">
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">

            <!-- Right Content -->
            <div class="col-span-full xl:col-auto">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                        <img class="h-24 xl:hidden my-3 rounded-full shadow-lg mx-auto " src="images/konten_satu.jpg"
                            alt="Bonnie image" />
                        <div class="hidden xl:block bg-biru py-3">
                            <img class="h-24 rounded-full object-cover mx-auto " src="images/konten_satu.jpg"
                                alt="Bonnie image" />
                            <span
                                class="flex justify-center text-white my-2 text-xl font-bold  dark:text-white">{{ $user->user->name }}</span>
                        </div>
                        <div>
                            <span
                                class="flex xl:hidden justify-center text-gray-800 mt-2 mb-4 text-xl font-bold  dark:text-white">{{ $user->user->name }}</span>

                            <div class="flex flex-col w-full">
                                <a href="{{ route('userProfile.index') }}">
                                    <button type="button"
                                        class="inline-flex items-center px-8 py-2 mt-3 text-sm font-medium  hover:bg-[#BCDEF8] text-gray-600 w-full">
                                        <img src="images/svg/profile.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        Profile
                                    </button>
                                </a>
                                <a href="{{ route('myCertification.index') }}">
                                    <button type="button"
                                        class="inline-flex items-center text-biru bg-[#BCDEF8] px-8 py-2 text-sm font-medium  w-full">
                                        <img src="images/svg/mycertificate.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        My Certificate
                                    </button>
                                </a>

                                <form action="{{ route('logout') }}" method="post" id="logout-form" class="inline">
                                    @csrf
                                    <button type="button"
                                        class="inline-flex items-center px-8 py-2 text-sm font-medium text-gray-600 hover:bg-[#BCDEF8] w-full"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <img src="images/svg/logout.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        Log Out
                                    </button>
                                </form>

                            </div>

                        </div>
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
