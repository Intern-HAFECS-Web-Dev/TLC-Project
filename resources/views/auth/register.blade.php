{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register Page</title>

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

            <div class="flex w-full justify-start items-center gap-1">
                <h1 class="text-xl font-bold">Teaching Learning Certification</h1>
                <img class="rounded-full w-20 h-20" src="{{ asset('assets/img/tlc.jpg') }}" alt="">
            </div>
            <h1 class="text-xl md:text-2xl font-bold leading-tight">Register</h1>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">Username atau Password salah!</span>
                    {{-- <span class="block sm:inline">{{ $errors->first() }}</span> --}}
                </div>
            @endif

            <form class="mt-6" action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Nama Depan --}}
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" placeholder="Enter Nama Lengkap" class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required aria-label="Email Address"
                    value="{{ old('name') }}">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Email --}}
                <div class="mt-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" minlength="6" class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none" required aria-label="Password" value="{{ old('email') }}">
                </div>

                {{-- Password --}}
                <div class="mt-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none" required aria-label="Password" autocomplete="new-password"
                        value="{{ old('password') }}">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Confirm Password --}}
                <div class="mt-4">
                    <label class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none" required aria-label="Password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                      px-4 py-3 mt-6">Register</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            {{-- <p class="mt-8">
                Need an account? 
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                    Create an account
                </a>
            </p> --}}

            <p class="text-sm text-gray-500 mt-12">&copy; {{ date('Y') }} Teaching Learning Certification - All Rights Reserved.</p>
        </div>

    </div>

</section>

</body>
</html>

