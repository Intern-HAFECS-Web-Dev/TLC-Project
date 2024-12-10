<!DOCTYPE html>
<html lang="en" class="scroll-pt-24 scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-abu">
    {{-- Navbar --}}
    <header class="mb-36">
        <nav
            class="rounded-lg bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/logo.svg" class="h-14" alt="TLC Logo">
                    <div class="self-center text-md font-semibold whitespace-nowrap dark:text-white">
                        <span>Teaching Learning</span><br>
                        <span class="text-md font-semibold">Certification</span>
                    </div>
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="hidden w-full lg:flex lg:w-auto items-center gap-8" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 lg:flex-row lg:space-x-5 lg:p-0 mt-4 lg:mt-0 font-medium border border-gray-100 rounded-lg bg-gray-50 lg:bg-white lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#home"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white dark:hover:bg-gray-700 lg:dark:hover:text-blue-500 dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white dark:hover:bg-gray-700 lg:dark:hover:text-blue-500 dark:border-gray-700">Tentang
                                Kami
                            </a>
                        </li>
                        <li>
                            <a href="#benefit"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white dark:hover:bg-gray-700 lg:dark:hover:text-blue-500 dark:border-gray-700">Keuntungan</a>
                        </li>
                        <li>
                            <a href="#price"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white dark:hover:bg-gray-700 lg:dark:hover:text-blue-500 dark:border-gray-700">Harga</a>
                        </li>
                        <li>
                            <a href="#testimoni"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 dark:text-white dark:hover:bg-gray-700 lg:dark:hover:text-blue-500 dark:border-gray-700">Testimoni</a>
                        </li>

                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block px-3 py-2 text-gray-900 rounded lg:hidden hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0">
                                    Masuk</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="block px-3 py-2 text-gray-900 rounded lg:hidden hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0">Daftar
                                </a>
                            </li>
                        @endguest
                    </ul>

                    @guest
                        <div class="hidden lg:flex lg:items-center lg:space-x-4">
                            <a href="{{ route('login') }}">
                                <button type="button"
                                    class="rounded-full text-[#34364A] bg-[#E8EBF3] hover:bg-[#d7dae8] focus:ring-4 focus:outline-none focus:ring-[#c2c6de] font-medium  text-sm px-4 py-2 ">
                                    Masuk
                                </button>
                            </a>
                            <a href="{{ route('register') }}">
                                <button type="button"
                                    class="text-[#34364A] bg-[#E8EBF3] hover:bg-[#d7dae8] focus:ring-4 focus:outline-none focus:ring-[#c2c6de] font-medium rounded-full text-sm px-4 py-2 ">
                                    Daftar
                                </button>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>

    </header>


    <main id="home" class="container mx-auto max-w-7xl">
        {{-- HOME --}}
        <div class="view grid grid-cols-12 transition-all duration-500 ease-in-out mb-14">
            <div class="col-span-12 lg:col-span-7 p-5">
                <div>
                    <span class="text-lg text-kuning">#LearnToTeach</span>
                    <h1 class="text-4xl font-bold text-[#34364A] leading-snug">Tingkatkan Kemampuan
                        <br>Mengajarmu Bersama Kami
                    </h1>
                    <p
                        class="text-base sm:text-lg lg:text-xl leading-relaxed sm:leading-snug text-center sm:text-justify mt-4">
                        Teaching and Learning Certification (TLC) adalah program yang dirancang untuk
                        memberdayakan para pendidik dengan pengetahuan, keterampilan, dan alat yang mereka
                        butuhkan untuk berkembang dalam lingkungan pendidikan masa kini
                    </p>

                </div>
                <div class="flex my-5 gap-3 justify-center lg:justify-start">
                    <a href="#skema">
                        <button type="button"
                            class="text-white hover:text-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                            Alur Belajar</button>
                    </a>
                    <a href="#">
                        <button type="button"
                            class="text-black bg-greys hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                            Panduan Karir</button>
                    </a>
                </div>
                <div class="w-full place-items-center md:flex lg:flex gap-2 md:justify-center lg:justify-start">
                    <img src="images/smpit-an-nur.png" alt="Logo SMPIT" class="h-32 object-cover">
                    <img src="images/smp-sma-gibs.png" alt="Logo GIBS" class="h-32 md:h-20 lg:h-20 object-cover my-3">
                    <img src="images/hafecs.png" alt="Logo HAFECS" class="h-12 object-cover my-6">
                    <img src="images/hrp.png" alt="hrp" class="h-32 object-cover">
                </div>
            </div>

            <div class="hidden lg:block col-span-12 lg:col-span-5 rounded-2xl mx-3 overflow-hidden">
                <img src="images/konten_satu.jpg" class="w-full h-full object-cover" alt="">
            </div>
        </div>
        {{-- END HOME --}}

        {{-- Tentang Kami --}}
        <div class="mb-14">
            <div class="view2 grid grid-cols-12" id="about">
                <div class="col-span-12 lg:col-span-5 rounded-2xl mx-3 overflow-hidden">
                    <img src="images/konten_dua.jpeg"
                        class="w-full md:w-[546px] h-full mx-auto md:h-[474px] object-cover" alt="">
                </div>
                <div class="col-span-12 lg:col-span-7 mx-5 lg:mx-10 mt-5">
                    <span class="text-lg font-semibold text-kuning">About Us</span>
                    <h1 class="text-2xl lg:text-3xl text-[#34364A] py-1 font-bold leading-snug">Apa itu TLC?</h1>
                    <p class="text-base text-justify font-normal lg:text-base">Program "Teaching and Learning
                        Certification" merupakan inisiatif yang dirancang khusus untuk menguji dan meningkatkan
                        kompetensi para guru dalam mengajar secara efektif, dengan menggunakan metode TMF (Teaching
                        Mastery Framework). Melalui program ini, HAFECS bertujuan memberikan standar pengajaran yang
                        berkualitas dan terstruktur untuk membantu para guru mencapai hasil belajar yang optimal di
                        kelas. Dengan mengikuti program ini, guru dapat menunjukkan keterampilan mengajar yang
                        mereka miliki, meningkatkan keahlian mereka dalam mengajar, dan memperoleh sertifikasi
                        sebagai pengakuan atas kemampuan mereka dalam mengelola kelas dengan metode yang efektif.
                    </p>
                </div>
            </div>

            <div class="view3 grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7 mx-5 lg:mx-10 mt-5 order-2 lg:order-1 lg:mt-20">
                    <span class="text-lg font-semibold text-kuning">Our Vision</span>
                    <h1 class="text-2xl lg:text-3xl py-1 text-[#34364A] font-bold leading-snug">Visi Kami?</h1>
                    <p class="text-base text-justify font-normal">Menjadi lembaga sertifikasi
                        kompetensi terkemuka yang berperan aktif dalam meningkatkan kualitas pendidikan dan
                        pengembangan sumber daya manusia. Lembaga ini berfokus pada bidang pendidikan dan
                        pelatihan, serta berkomitmen untuk menyelenggarakan uji kompetensi dengan standar
                        kualitas tinggi demi mendorong terciptanya tenaga pendidik yang kompeten dan
                        profesional.
                    </p>
                </div>
                <div
                    class="col-span-12 lg:col-span-5 rounded-2xl mx-3 mt-5 lg:mt-10 overflow-hidden order-1 lg:order-2">
                    <img src="images/konten_tiga.jpg"
                        class="w-full md:w-[546px] h-full mx-auto md:h-[474px] object-cover" alt="">
                </div>
            </div>

            <div class="view4 grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7 mt-5 mx-5 lg:mx-10 order-2 lg:mt-20">
                    <span class="text-lg font-semibold text-kuning">Our Mission</span>
                    <h1 class="text-2xl lg:text-3xl py-1 text-[#34364A] font-bold leading-snug">Misi Kami</h1>
                    <ul class="text-base font-semibold lg:text-lg list-disc mx-5">
                        <li>Memberikan sertifikasi yang berkualitas</li>
                        <li>Mendorong pengembangan kurikulum yang relevan</li>
                        <li>Memfasilitasi pendidikan dan pelatihan berkualitas</li>
                        <li>Mengedepankan prinsip keterlibatan dan kepuasan peserta</li>
                        <li>Berperan sebagai mitra strategis</li>
                        <li>Berinovasi dan berkolaborasi</li>
                        <li>Menjunjung tinggi etika dan integritas</li>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-5 order-1 rounded-2xl mx-3 mt-5 lg:mt-10 overflow-hidden">
                    <img src="images/konten_satu.jpg"
                        class="w-full md:w-[546px] h-full mx-auto md:h-[474px] object-cover" alt="">
                </div>
                {{-- <div class="col-span-12 lg:col-span-5 rounded-2xl mx-3 mt-5 lg:mt-10 overflow-hidden order-1 lg:order-2">
                        <img src="images/konten_tiga.jpg" class="w-full h-full object-cover" alt="">
                    </div> --}}
            </div>
        </div>
        {{-- End Tentang Kami --}}

        {{-- Skema --}}
        <div class="view5 mb-14 w-full h-700 bg-[#0C548C] rounded" id="skema">
            <h1 class="text-center text-white text-4xl font-bold py-5">Skema Pendaftaran TLC</h1>
            <img src="images/alur_skema.png" class="w-2/4 mx-auto h-full object-cover p-5" alt="">
        </div>
        {{-- End Skema --}}

        {{-- Benefit --}}
        <div class="view6 grid grid-cols-12 mb-14" id="benefit">
            <div class="col-span-12 mx-5 lg:col-span-7 lg:my-auto lg:mx-10 order-2 lg:order-1">
                <span class="text-lg font-semibold text-kuning">Benefit</span>
                <h1 class="text-2xl text-[#34364A] font-bold leading-snug lg:text-4xl">Manfaat dari mengikuti
                    program
                    Teaching Learning Certification
                </h1>
                <ul class="text-base font-semibold lg:text-lg list-none space-y-2 lg:mt-3">
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Sertifikat 16 JP (per level) Peserta Uji Kompetensi
                    </li>
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Hasil Uji Kompetensi
                    </li>
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Insentif
                    </li>
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Berkesempatan berkarir di HAFECS
                    </li>
                </ul>
            </div>
            <div class="col-span-12 lg:col-span-5 mx-auto lg:mx-0 order-1 lg:order-2">
                <img src="images/benefit.png"
                    class="w-full md:w-[440px] h-full md:h-[655px] object-cover lg:py-5 lg:pr-5" alt="">
            </div>
        </div>
        {{-- End Benefit --}}

        {{-- Pricelist --}}
        <div class="view7 mb-14 bg-[#0C548C]" id="price">
            <h1 class="text-center text-white pt-5 text-2xl lg:text-4xl font-bold my-10">Sertifikasi TLC by HAFECS
            </h1>
            <div class="md:flex pb-2 md:gap-4 px-5">
                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="text-center">
                        <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                        <h5 class="mb-7 text-xl md:text-2xl font-medium">Sertifikasi Level A</h5>
                        <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                        <h5 class="text-xl font-semibold">Rp 300.000</h5>
                        <p class="text-sm font-medium my-7">Uji Kompetensi Teori, Soal Pilihan Ganda, dan Essay</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-full text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                            Sekarang</button>
                    </div>
                </div>
                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="text-center">
                        <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                        <h5 class="mb-7 text-xl md:text-2xl font-medium">Sertifikasi Level B</h5>
                        <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                        <h5 class="text-xl font-semibold">Rp 300.000</h5>
                        <p class="text-sm font-medium my-7 lg:my-[38px]">Uji Kompetensi Modul PDF, PPT, Dll</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-full text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                            Sekarang</button>
                    </div>
                </div>
                <div
                    class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="text-center">
                        <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                        <h5 class="mb-7 text-xl md:text-2xl font-medium">Sertifikasi Level C</h5>
                        <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                        <h5 class="text-xl font-semibold">Rp 300.000</h5>
                        <p class="text-sm font-medium my-7 lg:my-[38px]">Uji Kompetensi Dalam Mengajar</p>
                        <button type="button"
                            class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-full text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                            Sekarang</button>
                    </div>
                </div>
            </div>
            {{-- <div class="mb-10 pb-4 px-4">
                        <div
                            class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 mb-2">
                                    <img src="images/logo.svg" alt="">
                                </div>

                                <div class="col-span-6">
                                    <h5 class="text-md font-semibold md:text-sm mb-2">Bundle Paket Sertifikat</h5>
                                    <p class="text-sm font-medium">Paket A+B+C</p>
                                </div>

                                <div class="col-span-6 text-end">
                                    <h5 class="text-red-600 line-through">Rp 1.000.000</h5>
                                    <h5 class="font-semibold">Rp 700.000</h5>
                                </div>
                                <button type="button"
                                    class="col-span-12 mt-5 text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                                    Sekarang</button>
                            </div>
                        </div>
                    </div> --}}
        </div>
        {{-- End Pricelist --}}

        {{-- Testimoni --}}
        <div class="view8 container mx-auto mb-14 w-3/4" id="testimoni">
            <h3 class="text-kuning font-medium text-lg lg:text-2xl text-center">TLC Telah Membantu Ratusan Pendidik
            </h3>
            <h1 class="font-bold text-2xl md:text-3xl text-[#34364A] text-center mb-7">Apa Kata Mereka?</h1>
            <div class="bg-white dark:bg-gray-900 shadow-lg rounded-2xl">
                <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
                    <div class="relative">
                        <div id="testimonial-carousel" class="overflow-hidden">
                            <div class="flex transition-transform duration-500" id="carousel-content">
                                <div class="w-full flex-shrink-0">
                                    <figure class="max-w-screen-md mx-auto">
                                        <blockquote>
                                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Flowbite
                                                is just
                                                awesome. It contains tons of predesigned components and pages
                                                starting from
                                                login screen to complex dashboard. Perfect choice for your next SaaS
                                                application."</p>
                                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                                <img class="w-6 h-6 rounded-full"
                                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                                    alt="profile picture">
                                                <div
                                                    class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">
                                                        Michael Gough
                                                    </div>
                                                    <div
                                                        class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">
                                                        CEO at Google
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </blockquote>
                                    </figure>
                                </div>
                                <!-- Card 2 -->
                                <div class="w-full flex-shrink-0">
                                    <figure class="max-w-screen-md mx-auto">
                                        <blockquote>
                                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"This
                                                tool has
                                                transformed the way I work. Highly recommended for all
                                                professionals."</p>
                                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                                <img class="w-6 h-6 rounded-full" src="https://via.placeholder.com/64"
                                                    alt="profile picture">
                                                <div
                                                    class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">
                                                        Jane Smith
                                                    </div>
                                                    <div
                                                        class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">
                                                        Product Manager
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </blockquote>
                                    </figure>
                                </div>
                                <!-- Card 3 -->
                                <div class="w-full flex-shrink-0">
                                    <figure class="max-w-screen-md mx-auto">
                                        <blockquote>
                                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"The user
                                                interface
                                                is intuitive and the customer service is excellent."</p>
                                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                                <img class="w-6 h-6 rounded-full" src="https://via.placeholder.com/64"
                                                    alt="profile picture">
                                                <div
                                                    class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">
                                                        John Doe
                                                    </div>
                                                    <div
                                                        class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">
                                                        Developer
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </blockquote>
                                    </figure>
                                </div>
                                <!-- Card 4 -->
                                <div class="w-full flex-shrink-0">
                                    <figure class="max-w-screen-md mx-auto">
                                        <blockquote>
                                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Our team
                                                saw
                                                increased productivity after using this tool."</p>
                                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                                <img class="w-6 h-6 rounded-full" src="https://via.placeholder.com/64"
                                                    alt="profile picture">
                                                <div
                                                    class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">
                                                        Sarah Lee
                                                    </div>
                                                    <div
                                                        class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">
                                                        Designer
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </blockquote>
                                    </figure>
                                </div>
                                <!-- Card 5 -->
                                <div class="w-full flex-shrink-0">
                                    <figure class="max-w-screen-md mx-auto">
                                        <blockquote>
                                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"A
                                                seamless
                                                experience from start to finish. Highly recommended."</p>
                                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                                <img class="w-6 h-6 rounded-full" src="https://via.placeholder.com/64"
                                                    alt="profile picture">
                                                <div
                                                    class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">
                                                        Alex Carter
                                                    </div>
                                                    <div
                                                        class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">
                                                        Analyst
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </blockquote>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Testimoni --}}
    </main>

    <footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="mx-auto w-full max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Section 1: Logo dan Informasi -->
                <div>
                    <img src="images/logo.svg" class="h-10 mb-4" alt="Logo">
                    <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2">
                        <li>UNIT HAFECS YHC</li>
                        <li>Jl. Trans, Sungai Lumbah, Kec. Alalak, Kabupaten Barito Kuala, Kalimantan Selatan, Indonesia
                        </li>
                        <li>+62***-****-****</li>
                        <li>team@google.com</li>
                    </ul>
                    <p class="mt-6 text-xs text-gray-400 dark:text-gray-500">
                        © 2024 <a href="https://flowbite.com/" class="hover:underline">Teaching Learning
                            Certificate</a>. All Rights Reserved.
                    </p>
                </div>

                <!-- Section 2: Company -->
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2">
                        <li><a href="#" class="hover:underline">About</a></li>
                        <li><a href="#" class="hover:underline">Careers</a></li>
                        <li><a href="#" class="hover:underline">Instagram</a></li>
                        <li><a href="#" class="hover:underline">Youtube</a></li>
                    </ul>
                </div>

                <!-- Section 3: Help Center -->
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help Center</h2>
                    <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2">
                        <li><a href="#" class="hover:underline">Facebook</a></li>
                        <li><a href="#" class="hover:underline">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Section 4: Legal -->
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-2">
                        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="#" class="hover:underline">Licensing</a></li>
                        <li><a href="#" class="hover:underline">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>



<script>
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll("#navbar-sticky a");

        navLinks.forEach(link => {
            link.addEventListener("click", function() {
                navLinks.forEach(navLink => navLink.classList.remove("text-blue-700",
                    "dark:text-blue-500", "font-bold")); // Hapus kelas dari semua tautan
                this.classList.add("text-blue-700", "dark:text-blue-500",
                    "font-bold"); // Tambahkan kelas ke tautan yang diklik
            });
        });
    });
    // Autoslide logic
    const carouselContent = document.getElementById('carousel-content');
    const items = carouselContent.children;
    let index = 0;

    setInterval(() => {
        index = (index + 1) % items.length;
        carouselContent.style.transform = `translateX(-${index * 100}%)`;
    }, 5000); // Change slide every 5 seconds


    // ScrollReveal().reveal('.view');
    ScrollReveal().reveal('.view', {
        origin: 'right',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view2', {
        origin: 'left',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view3', {
        origin: 'right',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view4', {
        origin: 'left',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view5', {
        origin: 'right',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view6', {
        origin: 'left',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view7', {
        origin: 'right',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
    ScrollReveal().reveal('.view8', {
        origin: 'left',
        distance: '50px',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });
</script>

</html>
