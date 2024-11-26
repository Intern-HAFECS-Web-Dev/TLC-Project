@extends('layouts.navbar')

@section('content')

<p class="bg-biru h-36"></p>
<main class="container mx-auto my-10">
    <div class="px-3 mt-3 p-4 bg-white shadow-xl">
        <!-- Card header -->
        <div class="items-center justify-between lg:flex">
            <div class=" py-2 lg:mb-0">
                <h3 class="text-xl font-bold text-gray-900">Riwayat Transaksi</h3>
                <span class="text-base font-normal text-gray-500">Daftar riwayat transaksi yang telah dilakukan</span>
            </div>
        </div>
        <hr class="py-5 border-black w-full mx-auto">

        <!-- Table -->
        <div class="mb-10 mt-5 px-5">
            <div class="flex flex-col border-gray-700 rounded-lg shadow-lg">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr class="even:bg-red-200 odd:bg-slate-200">
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            No.
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            Level Sertifikasi
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            Harga
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            Tanggal Pembayaran
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    <tr>
                                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                            1
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                            Level A
                                        </td>
                                        <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                            Rp. 300.000
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                            2024-11-16
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                Sukses</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-center text-gray-700 bg-indigo-300 rounded-lg">
                                                Invoice
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                            2
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                            Level B
                                        </td>
                                        <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                            Rp. 300.000
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">

                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                Proses Verifikasi</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-center text-gray-700 bg-indigo-300 rounded-lg">
                                                Invoice
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                            3
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                            Level C
                                        </td>
                                        <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                            Rp. 300.000
                                        </td>
                                        <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">

                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100">
                                                Belum Bayar</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-center text-gray-700 bg-indigo-300 rounded-lg">
                                                Invoice
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
