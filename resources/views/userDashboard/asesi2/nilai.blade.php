{{-- <div class="container mx-auto p-5">
    <h1 class="text-2xl font-bold mb-5">Hasil Penilaian Anda</h1>

    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-2 border border-gray-200">Kategori</th>
                <th class="p-2 border border-gray-200">Total Pertanyaan</th>
                <th class="p-2 border border-gray-200">Jawaban Benar</th>
                <th class="p-2 border border-gray-200">Persentase Kelulusan</th>
                <th class="p-2 border border-gray-200">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)

                <tr class="hover:bg-gray-50">
                    <td class="p-2 border border-gray-200">{{ $result['category'] }}</td>
                    <td class="p-2 border border-gray-200">{{ $result['total_questions'] }}</td>
                    <td class="p-2 border border-gray-200">{{ $result['correct_answers'] }}</td>
                    <td class="p-2 border border-gray-200">{{ number_format($result['pass_percentage'], 2) }}%</td>
                    <td class="p-2 border border-gray-200">{{ $result['nilai'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-5">
        <h2 class="text-lg font-semibold">
            Rata-rata Persentase Kelulusan:
            <span class="text-blue-500">{{ number_format($averagePassPercentage, 2) }}%</span>
        </h2>
    </div>
</div> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">
    {{-- Header --}}
    <div class="mb-14">
        <div class="bg-biru w-full h-20 flex items-center relative">
            <a href="{{ route('kategoriLevel.index') }}"
                class="absolute left-4 inline-flex items-center px-3 py-1.5 rounded-md hover:bg-gray-600">
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

    <div class="px-5 max-w-7xl mx-auto">
        <div class="px-3 mt-3 p-4 bg-white h-[450px] shadow-md">
            <!-- Card header -->
            <div class=" py-2 lg:mb-0">
                <h3 class="text-xl font-bold pb-2 text-gray-900">Nilai</h3>
                <div class="flex justify-between">
                    <span class="text-base font-normal text-gray-500">Nilai setelah melakukan quiz sertifikasi yang
                        telah Anda selesaikan</span>
                    <a href="#" class="bg-biru hover:bg-blue-700 text-white uppercase p-2 rounded-lg">
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
                            class="">
                            Hasil Tes
                        </button>
                    </a>
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
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
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union enacts new consumer
                                        privacy laws for its citizens, companies around the world are updating their
                                        terms of service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                        effect on May 25 and is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify users as soon as possible of
                                        high-risk data breaches that could personally affect them.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center justify-center gap-2 p-4 border-t border-gray-200 rounded-b md:p-5">
                                    <button data-modal-hide="static-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-base font-medium text-red-900 focus:outline-none bg-white rounded-lg border border-red-200 hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 ">Batalkan
                                        </button>
                                    <button data-modal-hide="static-modal" type="button"
                                        class="text-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base  px-5 py-2.5 text-center ">Konfirmasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="py-5 border-black w-full mx-auto">

            <!-- Table -->
            <div class="mb-10 mt-3 px-5">
                <div class="flex flex-col border-gray-700 rounded-lg shadow-md">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
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
                                                        Total Pertanyaan
                                                    </th>

                                                    <th scope="col"
                                                        class="p-4 text-sm font-medium text-gray-700 dark:text-gray-300 tracking-wider text-center uppercase">
                                                        Jawaban Benar
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
                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td
                                                            class="p-4 text-sm font-normal text-gray-900 dark:text-gray-300 whitespace-nowrap">
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td
                                                            class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                            {{ $result['category'] }}
                                                        </td>
                                                        <td
                                                            class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                            70
                                                        </td>
                                                        <td
                                                            class="p-4 text-sm font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                            {{ $result['total_questions'] }}
                                                        </td>
                                                        <td
                                                            class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                            {{ $result['correct_answers'] }}
                                                        </td>
                                                        <td
                                                            class="p-4 text-sm font-normal text-gray-700 dark:text-gray-300 whitespace-nowrap">
                                                            {{ number_format($result['pass_percentage'], 2) }}%
                                                        </td>
                                                        <td class="p-4 whitespace-nowrap">
                                                            <span
                                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md">
                                                                {{ $result['nilai'] }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach




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
