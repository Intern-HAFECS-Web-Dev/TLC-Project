@extends('layouts.navbar')

@section('content')
    <p class="bg-abu h-32"></p>

    <main class="container px-5 mx-auto w-2/6 py-5 mb-5 rounded-md bg-white">
        <h1 class="text-xl font-semibold mb-2">Pembayaran Sertifikat</h1>

        <div class="block w-full mb-4 px-4 py-5 bg-white border border-gray-200 rounded-lg shadow">
            <h5 class="text-sm text-[#838A96]">Order Review</h5>
            <h1 class="text-xl text-[#0C548C] font-semibold">Sertifikat Level A</h1>
            <h5 class="text-sm text-[#585866]">3 Bulan</h5>
            <p class="font-normal text-[#34364A] text-justify text-sm">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, beatae architecto harum vel ipsum eaque quod! Similique non quidem
                voluptatem! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, quos.</p>
        </div>

        <div class="w-full bg-white border border-gray-200 rounded-lg shadow ">
            <h5 class="text-sm text-center bg-red-200 rounded-t-lg py-2 text-[#E3362C]">Bayar sebelum <span
                    class="font-bold">23 jam 58 menit</span></h5>
            <div class="px-5 pb-5 text-center">
                <h5 class="text-sm text-[#838A96] mt-2">Total Pembayaran</h5>
                <h1 class="text-xl text-[#0C548C] font-semibold">300.000</h1>
                <p class="font-normal text-[#34364A] text-sm mt-3">Pembayaran dapat dilakukan di rekening</p>
                <img src="images/mandiri.png" class="w-20 h-20 mx-auto" alt="">

                <p class="text-[#34364A] text-sm">123-456-789 <span class="text-sm text-[#0C548C] font-bold"><a
                            href="#">Salin</a></span></p>
                <p class="text-sm text-[#747D87]">Bank Mandiri (Transfer) a/n Yayasan Hasnur Centre</p>
            </div>
        </div>


        <div class="flex items-center justify-center w-full mt-4">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik untuk unggah
                            bukti pembayaran</span> </p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>

        <div class="flex justify-center gap-3 mt-5 mx-10">
            <a href="{{ route('userDashboard.index') }}">
                <button type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</button>
            </a>
            <button type="button"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Kirim</button>

        </div>
    </main>

@endsection
