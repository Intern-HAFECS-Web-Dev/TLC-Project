<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
        <img src="{{ asset('assets/img/loginPage.jpg') }}" alt="Background Image" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

        <div class="w-full h-100">

            <div class="flex w-full justify-start items-center gap-4">
                <h1 class="text-xl font-bold">Teaching Learning Certification</h1>
                <img class="rounded-full w-20 h-20" src="{{ asset('assets/img/tlc.jpg') }}" alt="">
            </div>
            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-4">Login</h1>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">Username atau Password salah!</span>
                    {{-- <span class="block sm:inline">{{ $errors->first() }}</span> --}}
                </div>
            @endif

            <form class="mt-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label class="block text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required aria-label="Email Address">
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg -gray-200 mt-2 border focus:border-blue-500
                          focus:bg-white focus:outline-none" required aria-label="Password">
                </div>

                <div class="text-right mt-2">
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                      px-4 py-3 mt-6">Log In</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            <a  href="https://www.instagram.com/hmsakif__/" 
                class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300"
                target="_blank">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
                        <defs>
                            <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                        </defs>
                        <clipPath id="b">
                            <use xlink:href="#a" overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                        <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                        <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                        <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                    </svg>
                    <span class="ml-4">
                        Log in
                        with
                        Google
                    </span>
                </div>
            </a>

            <p class="mt-8">
                Need an account? 
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                    Create an account
                </a>
            </p>

            <p class="text-sm text-gray-500 mt-12">&copy; {{ date('Y') }} Teaching Learning Certification - All Rights Reserved.</p>
        </div>

    </div>

</section>

</body>
</html>