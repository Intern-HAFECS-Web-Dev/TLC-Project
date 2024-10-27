<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <p>ini adalah dashboard {{ $role }}</p>

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

</body>
</html>