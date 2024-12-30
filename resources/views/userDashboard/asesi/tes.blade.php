<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Literasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 font-sans">
  <!-- Header -->
  <header class="bg-biru text-white py-4 px-6 flex justify-between items-center">
    <h1 class="text-xl font-semibold">LITERASI</h1>
    {{-- <img src="images/logo.svg" class="h-14" alt="TLC Logo" --}}
    <div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="flex">

    <!-- Kontainer Soal -->
    <main class="flex-1 p-6 bg-white">
      <div class="border p-6 rounded shadow-md">

        <!-- Header Soal -->
        <div class="flex justify-between items-center mb-6">
          <h2 class="font-semibold text-lg">SOAL NO. <span class="text-blue-600">1</span></h2>
          <p class="font-semibold text-lg">SISA WAKTU: <span class="text-blue-600">01:13:23</span></p>
        </div>
        <hr class="h-1 mx-auto my-6 bg-gray-100 border-0 rounded  dark:bg-gray-700">

        <!-- Isi Soal -->
        <p class="mb-3">
          Dalam penggunaan internet, kita sering mendengarkan kata “buffering”.
          <br>
          Pengertian dari kata buffering adalah…
        </p>

        <!-- Pilihan Jawaban -->
        <ul class="space-y-4">
          <li>
            <label class="flex items-center">
              <input type="radio" name="answer" class="mr-2" />
              Proses penyimpanan data sementara untuk memungkinkan beberapa variasi pada kecepatan perangkat
            </label>
          </li>
          <li>
            <label class="flex items-center">
              <input type="radio" name="answer" class="mr-2" />
              Metode yang digunakan untuk mengurangi pembicaraan silang
            </label>
          </li>
          <li>
            <label class="flex items-center">
              <input type="radio" name="answer" class="mr-2" />
              Metode yang digunakan untuk mengurangi pembicaraan silang
            </label>
          </li>
          <li>
            <label class="flex items-center">
              <input type="radio" name="answer" class="mr-2" />
              Metode yang digunakan untuk mengurangi overhead routing
            </label>
          </li>
        </ul>
      </div>

      <!-- Navigasi Soal -->
      <div class="flex justify-between mt-6">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">&larr; SEBELUMNYA</button>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">SELANJUTNYA &rarr;</button>
      </div>
    </main>

    <!-- Nomor Soal -->
    <aside class="w-1/5 bg-white border-l p-4">
      <h2 class="text-lg font-semibold mb-4">NOMOR SOAL</h2>
      <div class="grid grid-cols-5 gap-2">
        <button class="bg-green-500 text-white rounded py-2 text-center">1</button>
        <button class="bg-orange-500 text-white rounded py-2 text-center">2</button>
        <button class="bg-green-500 text-white rounded py-2 text-center">3</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">4</button>
        <button class="bg-green-500 text-white rounded py-2 text-center">5</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">6</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">7</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">8</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">9</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">10</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">11</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">12</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">13</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">14</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">15</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">16</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">17</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">18</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">19</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">20</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">21</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">22</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">23</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">24</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">25</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">26</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">27</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">28</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">29</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">30</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">31</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">32</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">33</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">34</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">35</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">36</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">37</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">38</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">39</button>
        <button class="bg-gray-400 text-white rounded py-2 text-center">40</button>
      </div>

      <div class="mt-4 text-sm">
        <p><span class="bg-green-500 inline-block w-4 h-4 mr-2"></span> Hijau = Sudah dijawab</p>
        <p><span class="bg-orange-500 inline-block w-4 h-4 mr-2"></span> Orange = Ragu-ragu</p>
        <p><span class="bg-gray-400 inline-block w-4 h-4 mr-2"></span> Abu-abu = Belum dijawab</p>
      </div>
    </aside>

  </div>

  <footer class="p-4 text-center bg-white border-t">
    <button class="bg-red-500 text-white px-6 py-2 rounded">BERHENTI</button>
  </footer>

</body>
</html>
