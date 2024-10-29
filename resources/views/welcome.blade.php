<!DOCTYPE html>
<html lang="en">

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
                    <img src="images/logo.svg" class="h-8" alt="TLC Logo">
                    <div class="self-center text-md font-semibold whitespace-nowrap dark:text-white">
                        <span>Teaching Learning</span><br>
                        <span class="text-md font-semibold">Certification</span>
                    </div>
                </a>
                <div
                    class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3 items-center transition-all duration-500 ease-in-out">
                    <div class="hidden md:block">
                        <div class="flex items-center gap-2">
                            <button class="btn btn-ghost btn-circle bg-greys rounded-full">
                                <svg xmln s="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            @guest

                                <a href="{{ route('login') }}">
                                    <button type="button"
                                        class="text-black bg-greys hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Sign in</button>
                                </a>

                                <a href="{{ route('register') }}">
                                    <button type="button"
                                        class="text-black bg-greys hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Sign up</button>
                                </a>
                            @endguest
                        </div>

                    </div>

                    @auth
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
                    @endauth

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
                        class="md:flex flex-sm:col-span-12 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                                Us</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Benefit</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Price</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimoni</a>
                        </li>
                        @guest
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <section class="mt-8 mx-3">
            <div class="flex container mx-auto ">
                <div class="grid grid-cols-12 transition-all duration-500 ease-in-out">
                    <div class="col-span-12 lg:col-span-7">
                        <div>
                            <span class="text-lg text-kuning">#LearnToTeach</span>
                            <h1 class="text-4xl font-bold leading-snug">Enhance Your <br> Teaching Skills With Us</h1>
                            <p class="text-lg flex-wrap mt-2">The Teaching and Learning Certification (TLC) program is
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
                                    class="text-white bg-[#0C548C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Alur Belajar</button>
                            </a>
                            <a href="#">
                                <button type="button"
                                    class="text-black bg-greys hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Panduan Karir</button>
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block col-span-12 lg:col-span-5 ml-5">
                        <img src="images/maincontent.png" width="500rem" height="470rem" alt="">
                    </div>
                    <div class="col-span-12 lg:col-span-7 w-full">
                        <img src="images/company.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 mx-3">
            <div class="flex container mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-5 ">
                        <img src="images/guru.png" class="w-full h-full object-cover p-5" alt="">
                    </div>
                    <div class="col-span-12 lg:col-span-7 mx-3 mt-10">
                        <span class="text-lg text-kuning">About Us</span>
                        <h1 class="text-2xl font-bold leading-snug">Apa itu TLC</h1>
                        <p class="text-md text-justify font-semibold lg:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Facere nulla eius molestias vero ex. Porro culpa aliquam, cum, ullam reiciendis modi
                            alias cupiditate asperiores nulla exercitationem debitis repudiandae velit maiores. Quaerat
                            suscipit fugit nemo blanditiis, ipsa ad. Quis necessitatibus qui sapiente exercitationem
                            libero laborum magni impedit omnis amet vitae! Magnam exercitationem mollitia quam velit
                            numquam quae nulla? Quae amet reprehenderit cumque porro fugiat aliquam debitis expedita
                            possimus cum nemo exercitationem distinctio minus itaque, quas facere nihil laboriosam,
                            necessitatibus a in ipsa quisquam nulla omnis beatae. Facere dignissimos ratione quis
                            deleniti eveniet asperiores architecto quia est adipisci at, accusantium sit! Voluptas?
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto my-10">
                <div class="my-8">
                    <h1 class="text-3xl font-bold text-center">Visi</h1>
                    <p class="mt-2 text-justify text-md font-semibold lg:text-lg mx-3 lg:text-center">Lorem ipsum dolor
                        sit amet
                        consectetur adipisicing elit. Aut, quo! Ad ipsa perferendis in? Consequatur porro earum
                        inventore cumque eos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet quae
                        doloremque commodi voluptate ipsa magni vero itaque alias reiciendis reprehenderit beatae, sint
                        nesciunt aut obcaecati dolorem fuga architecto possimus explicabo, temporibus nulla a omnis,
                        neque assumenda iste. Ab officia atque neque molestias magni esse earum illo commodi laborum!
                        Laborum, aspernatur?</p>
                </div>
            </div>


            <div class="flex container mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-7 mx-5 order-2 lg:order-1 lg:my-auto">
                        <h1 class="text-2xl font-bold leading-snug">Misi yang kami Emban</h1>
                        <ul class="text-md font-semibold lg:text-lg list-disc mx-5">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, corrupti? Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Quasi dolores incidunt ut quisquam
                                laboriosam consectetur eius cum ducimus delectus minus!</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, corrupti?</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, corrupti?</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, corrupti?</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, corrupti?</li>
                        </ul>
                    </div>
                    <div class="col-span-12 lg:col-span-5 order-1 lg:order-2">
                        <img src="images/siswa.png" class="w-full h-full object-cover p-5" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="mt-8 mx-3">
            <div class="container mx-auto w-full h-700 bg-[#0C548C] rounded">
                <h1 class="text-center text-white text-4xl font-bold py-5">Skema Pendaftaran TLC</h1>
                <img src="images/alur.png" class="w-full h-full object-cover p-5" alt="">
            </div>
        </section>

        <section class="mt-8 mx-3">
            <div class="flex container mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-7 lg:my-auto order-2 lg:order-1">
                        <span class="text-lg text-kuning">Benefit</span>
                        <h1 class="text-2xl font-bold leading-snug">Manfaat dari mengikuti program <br>Teaching
                            Learning Certification</h1>
                        <ul class="text-md font-semibold lg:text-lg list-disc mx-5">
                            <li>Meningkatkan Personal Branding</li>
                            <li>Menambah Sumber income</li>
                            <li>Menambah Networking baru</li>
                            <li>Mendapatkan project freelance</li>
                        </ul>
                    </div>
                    <div class="col-span-12 lg:col-span-5 order-1 lg:order-2">
                        <img src="images/benefit.png" class="w-full h-full object-cover p-5" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
<script>
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
</script>

</html>
