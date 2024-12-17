<div class="container mx-auto p-5">
    <h1 class="text-2xl font-bold mb-5">Hasil Penilaian Anda</h1>

    {{-- Tabel Menampilkan Nilai Tiap Kategori --}}
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

    {{-- Menampilkan Rata-rata Kelulusan --}}
    <div class="mt-5">
        <h2 class="text-lg font-semibold">
            Rata-rata Persentase Kelulusan:
            <span class="text-blue-500">{{ number_format($averagePassPercentage, 2) }}%</span>
        </h2>
    </div>
</div>
