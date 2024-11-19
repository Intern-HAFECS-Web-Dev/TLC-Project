<!DOCTYPE html>
<html lang="en" class="scroll-pt-20">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-abu">
    {{-- Navbar --}}
    <header class="mb-24">
        <nav
            class="rounded-lg bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 transition-all duration-500 ease-in-out">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/logo.svg" class="h-14" alt="TLC Logo">
                    <div class="self-center text-md font-semibold whitespace-nowrap dark:text-white">
                        <span>Teaching Learning</span><br>
                        <span class="text-md font-semibold">Certification</span>
                    </div>
                </a>
                <div
                    class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3 items-center transition-all duration-500 ease-in-out">
                    <div class="hidden md:block">
                        <div class="flex items-center gap-2">
                            <button class="btn btn-ghost btn-circle  rounded-full">
                                <svg xmln s="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            {{-- @guest --}}

                                <a href="{{ route('login') }}">
                                    <button type="button"
                                        class="text-black hover:text-white bg-greys hover:bg-biru focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                                        Sign in</button>
                                </a>

                                <a href="{{ route('register') }}">
                                    <button type="button"
                                        class="text-black hover:text-white bg-greys hover:bg-biru focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                                        Sign up</button>
                                </a>
                            {{-- @endguest --}}
                        </div>

                    </div>

                    {{-- @auth
                        @hasrole('admin')
                            <a href="{{ route('adminDashboard.index') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali</button>
                            </a>
                        @endhasrole

                        @hasrole('assessor')
                            <a href="{{ route('assessorDashboard.index') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali</button>
                            </a>
                        @endhasrole

                        @hasrole('user')
                            <a href="{{ route('userDashboard.index') }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali</button>
                            </a>
                        @endhasrole
                    @endauth --}}

                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="md:flex flex-sm:col-span-12 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 lg:text-md md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#home"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                                Us</a>
                        </li>
                        <li>
                            <a href="#benefit"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Benefit</a>
                        </li>
                        <li>
                            <a href="#price"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Price</a>
                        </li>
                        <li>
                            <a href="#testimoni"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimoni</a>
                        </li>
                        {{-- @guest --}}
                            <li>
                                <a href="{{ route('login') }}"
                                    class="md:hidden block py-2 px-3 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign
                                    In</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="md:hidden block py-2 px-3 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign
                                    Up</a>
                            </li>
                        {{-- @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main id="home">
        <section class="mt-8 mx-5">
            <div class="flex container mx-auto ">
                <div class="grid grid-cols-12 transition-all duration-500 ease-in-out">
                    <div class="col-span-12 lg:col-span-7 p-5">
                        <div>
                            <span class="text-lg lg:text-xl text-kuning">#LearnToTeach</span>
                            <h1 class="text-4xl lg:text-5xl font-bold leading-snug">Enhance Your <br> Teaching Skills
                                With Us</h1>
                            <p class="text-lg flex-wrap mt-2 text-justify">The Teaching and Learning Certification (TLC)
                                program is
                                <br>
                                designed to
                                empower educators
                                with the knowledge, skills, <br> and tools they need to thrive in today’s educational
                                environment.
                            </p>
                        </div>
                        <div class="flex my-5 gap-3 justify-center lg:justify-start">
                            <a href="#">
                                <button type="button"
                                    class="text-black hover:text-white bg-[#A6BFCF] hover:bg-biru focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                                    Alur Belajar</button>
                            </a>
                            <a href="#">
                                <button type="button"
                                    class="text-black hover:text-white bg-[#A6BFCF] hover:bg-biru focus:ring-4 focus:outline-none focus:ring-biru font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-biru">
                                    Panduan Karir</button>
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block col-span-12 lg:col-span-5 ml-5">
                        <img src="images/konten_satu.jpg" class="w-full h-full object-cover rounded-lg p-5"
                            alt="">
                    </div>

                    <div class="col-span-12 w-full place-items-center md:flex lg:flex gap-2">
                        <img src="images/smpit-an-nur.png" alt="Logo SMPIT" class="h-32 object-cover">
                        <img src="images/smp-sma-gibs.png" alt="Logo GIBS"
                            class="h-32 md:h-24 lg:h-24 object-cover my-3">
                        <img src="images/hafecs.png" alt="Logo HAFECS" class="h-12 object-cover my-6">
                        <img src="images/hrp.png" alt="hrp" class="h-32 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 mx-5">
            <div class="flex container mx-auto mb-5" id="about">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-5 ">
                        <img src="images/konten_dua.jpeg" class="w-full h-full object-cover rounded-lg p-5"
                            alt="">
                    </div>
                    <div class="col-span-12 lg:col-span-7 mx-3 mt-10">
                        <span class="text-lg text-kuning">About Us</span>
                        <h1 class="text-2xl font-bold leading-snug">Apa itu TLC</h1>
                        <p class="text-md text-justify font-semibold lg:text-lg">Program "Teaching and Learning
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
            </div>

            <div class="flex container mx-auto mb-5">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-7 mx-5 order-2 lg:order-1 lg:my-auto">
                        <div class="col-span-12 lg:col-span-7 mx-3 mt-10">
                            <h1 class="text-2xl font-bold leading-snug">Visi dari TLC</h1>
                            <p class="text-md text-justify font-semibold lg:text-lg">Menjadi lembaga sertifikasi
                                kompetensi terkemuka yang berperan aktif dalam meningkatkan kualitas pendidikan dan
                                pengembangan sumber daya manusia. Lembaga ini berfokus pada bidang pendidikan dan
                                pelatihan, serta berkomitmen untuk menyelenggarakan uji kompetensi dengan standar
                                kualitas tinggi demi mendorong terciptanya tenaga pendidik yang kompeten dan
                                profesional.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-5 order-1 lg:order-2">
                        <img src="images/konten_tiga.jpg" class="w-full h-full object-cover p-5" alt="">
                    </div>
                </div>
            </div>


            <div class="flex container mx-auto mb-5">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-7 mx-5 order-2  lg:my-auto">
                        <h1 class="text-2xl font-bold leading-snug">Misi yang kami Emban</h1>
                        <ul class="text-md font-semibold lg:text-lg list-disc mx-5">
                            <li>Memberikan sertifikasi yang berkualitas</li>
                            <li>Mendorong pengembangan kurikulum yang relevan</li>
                            <li>Memfasilitasi pendidikan dan pelatihan berkualitas</li>
                            <li>Mengedepankan prinsip keterlibatan dan kepuasan peserta</li>
                            <li>Berperan sebagai mitra strategis</li>
                            <li>Berinovasi dan berkolaborasi</li>
                            <li>Menjunjung tinggi etika dan integritas</li>
                        </ul>
                    </div>
                    <div class="col-span-12 lg:col-span-5 order-1">
                        <img src="images/siswa.png" class="w-full h-full object-cover p-5" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 mx-5">
            <div class="container mx-auto w-full h-700 bg-[#0C548C] rounded">
                <h1 class="text-center text-white text-4xl font-bold py-5">Skema Pendaftaran TLC</h1>
                <img src="images/alur_skema.png" class="w-2/4 mx-auto h-full object-cover p-5" alt="">
            </div>
        </section>

        <section class="mt-8 mx-5">
            <div class="flex container mx-auto lg:px-5" id="benefit">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-7 lg:my-auto order-2 lg:order-1">
                        <span class="text-lg text-kuning lg:text-xl">Benefit</span>
                        <h1 class="text-2xl font-bold leading-snug lg:text-3xl">Manfaat dari mengikuti program
                            <br>Teaching
                            Learning Certification
                        </h1>
                        <ul class="text-md font-semibold lg:text-lg list-disc mx-5">
                            <li>Sertifikat 16 JP (per level) Peserta Uji Kompetensi</li>
                            <li>Hasil Uji Kompetensi</li>
                            <li>Insentif</li>
                            <li>Berkesempatan berkarir di HAFECS</li>
                        </ul>
                    </div>
                    <div class="col-span-12 lg:col-span-5 order-1 lg:order-2">
                        <img src="images/benefit.png" class="w-full h-full object-cover p-5" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 mx-5">
            <div class="container mx-auto mb-10 bg-[#0C548C]" id="price">
                <div class="text-center text-white mb-10 pt-5">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-10">Sertifikasi TLC by HAFECS</h1>
                    <p class="text-sm font-medium lg:text-lg">Dapatkan harga spesial agar kamu bisa lebih hemat!!</p>
                </div>
                <div class="md:flex pb-2 md:gap-1 md:px-2 px-4">
                    <div
                        class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="text-center">
                            <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                            <h5 class="mb-7 text-2xl font-semibold">Sertifikasi Level A</h5>
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                            <p class="text-md font-medium mb-7">Uji Kompetensi Teori, Soal Pilihan Ganda, dan Essay</p>
                            <button type="button"
                                class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                                Sekarang</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="text-center">
                            <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                            <h5 class="mb-7 text-2xl font-semibold">Sertifikasi Level B</h5>
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                            <p class="text-lg font-medium mb-6">Uji Kompetensi Membuat Modul dan PPT</p>
                            <button type="button"
                                class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
                                Sekarang</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto mb-7 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="text-center">
                            <img src="images/logo.svg" class="mx-auto mb-7" alt="">
                            <h5 class="mb-7 text-2xl font-semibold">Sertifikasi Level C</h5>
                            <h5 class="text-lg text-red-600 line-through">Rp 600.000</h5>
                            <h5 class="text-xl font-semibold mb-7">Rp 300.000</h5>
                            <p class="text-md font-medium mb-7">Uji Kompetensi Teori, Soal Pilihan Ganda, dan Essay</p>
                            <button type="button"
                                class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Ikut
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
        </section>



        <section class="mt-8 mx-5">
            <div class="container mx-auto mb-10 w-3/4">
                <h3 class="text-kuning font-semibold text-lg text-center">TLC Telah Membantu Ratusan Pendidik</h3>
                <h1 class="font-bold text-xl lg:text-2xl text-center mb-5">Apa Kata Mereka?</h1>
                <div class="bg-white dark:bg-gray-900 shadow-lg">
                    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
                        <div class="relative">
                            <!-- Testimonial Carousel -->
                            <div id="testimonial-carousel" class="overflow-hidden">
                                <!-- Carousel Items -->
                                <div class="flex transition-transform duration-500" id="carousel-content">
                                    <!-- Card 1 -->
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
                                                    <img class="w-6 h-6 rounded-full"
                                                        src="https://via.placeholder.com/64" alt="profile picture">
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
                                                    <img class="w-6 h-6 rounded-full"
                                                        src="https://via.placeholder.com/64" alt="profile picture">
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
                                                    <img class="w-6 h-6 rounded-full"
                                                        src="https://via.placeholder.com/64" alt="profile picture">
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
                                                    <img class="w-6 h-6 rounded-full"
                                                        src="https://via.placeholder.com/64" alt="profile picture">
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
        </section>


    </main>

    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2024 <a
                        href="https://flowbite.com/">Teaching Learning Certificate</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
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
</script>

</html>




{{-- <div class="overflow-hidden w-full max-w-md mx-auto">
                <ul class="flex transition-transform duration-500 ease-in-out" id="sliderList">
                    <li class="min-w-full">
                        <img src="images/siswa.png" alt="Image 1" class="w-full object-cover">
                    </li>
                    <li class="min-w-full">
                        <img src="images/benefit.png" alt="Image 2" class="w-full">
                    </li>

                </ul>
            </div>

<js nya>
            let currentIndex = 0;

    function slideImages() {
        const sliderList = document.getElementById('sliderList');
        const totalImages = sliderList.children.length;

        currentIndex = (currentIndex + 1) % totalImages;
        sliderList.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(slideImages, 4000); --}}
