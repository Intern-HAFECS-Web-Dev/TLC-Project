{{-- <x-app-layout>
    <x-slot name="header">
        @hasrole('admin')
                            <h1>anda adalah admin</h1>
                        @endhasrole

                        @hasrole('user')
                            <h1>anda adalah user</h1>
                        @endhasrole

                        @hasrole('assessor')
                            <h1>anda adalah assessor</h1>
                        @endhasrole
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- resource css tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <h1>ini adalah user dashboard</h1>
        {{-- <p>{{ $province->name }}</p> --}}
    </header>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button 
        type="submit"
        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"
        onclick="event.preventDefault(); this.closest('form').submit();"
        >
        {{ __('Log Out') }}
        </button>
    </form>

    <a href="{{ route('tampilkan.provinsi', Auth::user()->id) }}">
        <button>testing</button>
    </a>
</body>
</html>
