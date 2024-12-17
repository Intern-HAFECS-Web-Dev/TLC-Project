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
