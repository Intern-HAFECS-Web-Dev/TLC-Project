<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    {{-- Header --}}
    <div class="mb-14">
        <div class="bg-biru w-full h-20 flex items-center relative">
            <a href="#" class="absolute left-4 inline-flex items-center px-3 py-1.5 rounded-md hover:bg-indigo-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18">
                    </path>
                </svg>
                <span class="ml-1  text-white font-bold text-lg">Kembali</span>
            </a>

            <h1 class="text-center w-full text-white font-bold text-2xl">Selesai</h1>
        </div>
    </div>

    <div class="px-5">
        <div class="px-3 mt-3 p-4 bg-white shadow-xl">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class=" py-2 lg:mb-0">
                    <h3 class="text-xl font-bold pb-2 text-gray-900">Nilai</h3>
                    <span class="text-base font-normal text-gray-500">Nilai setelah melakukan quiz sertifikasi yang
                        telah Anda selesaikan</span>
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
                                    {{-- <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr class="even:bg-red-200 odd:bg-slate-200">
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                                No.
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                                Kategori Soal
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                                NIlai Minimum
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                                Nilai User
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-black uppercase">
                                                Status
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        <tr>
                                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                1
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                Numerasi
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                75
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                    Sukses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                2
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                HOTS
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                    Sukses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                3
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                PCK
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                    Sukses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                4
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                Literasi
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-700 whitespace-nowrap">
                                                70
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                                                70 </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                    Sukses</span>
                                            </td>
                                        </tr>

                                    </tbody> --}}
                                    <div class="overflow-hidden shadow sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                            <!-- Header Table -->
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        No.
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        Kategori Soal
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        Nilai Minimum
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        Nilai User
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!-- Body Table -->
                                            <tbody class="bg-white text-center">
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                                        1
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        Numerasi
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        75
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap">
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                            Sukses</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                                        2
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        HOTS
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap">
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                            Sukses</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                                        3
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        PCK
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap">
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                            Sukses</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                                        4
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        Literasi
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td
                                                        class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                        70
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap">
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                            Sukses</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Header --}}
</body>

</html>
