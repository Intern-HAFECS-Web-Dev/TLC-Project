@extends('dashboard.adminDashboard')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5 mt-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Asesi
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="ml-1 text-gray-400 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    Asesor
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">
                                    Admin
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"></h1>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="email" id="users-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search for users">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                        <a href="{{ route('testing') }}"
                            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-popover-target="popover-delete" data-popover-placement="bottom"
                            data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                            <svg class="w-6 h-6" fill="#C81E1E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <a href="{{ route('users.create') }}">
                        <button
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            data-popover-target="popover-addUser" 
                            data-popover-placement="bottom">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add user
                        </button>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                        data-popover-target="popover-export" 
                            data-popover-placement="bottom">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Export
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">

                    {{-- table start --}}
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-700 dark:bg-gray-700">
                            <tr>

                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    No
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Name
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    No HP
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Instansi
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Jenis Kelamin
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Created_at
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Last Seen
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Status
                                </th>
                                <th scope="col"
                                    class="py-2 px-4 text-xs font-medium text-left text-white uppercase dark:text-gray-400">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                         
                            @foreach ($userProfile as $user)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 odd:bg-red-50 even:bg-blue-50">

                                    {{-- checkbox --}}
                                    <td class="py-2 px-4">
                                        {{ $loop->iteration }}
                                    </td>

                                    {{-- image,nama,email --}}
                                    <td class="flex items-center py-2 px-4 mr-12 space-x-6 whitespace-nowrap">
                                        <img class="w-12 h-12 rounded-full"
                                            src="{{ asset('/storage/' . $user->profile_image) }}" alt="avatar">
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                {{ $user->fullname }}
                                            </div>
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                {{ $user->user->email }}
                                            </div>
                                        </div>
                                    </td>

                                    {{-- no Wa --}}
                                    <td
                                        class="max-w-sm py-2 px-4 overflow-hidden text-base font-normal text-black truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $user->no_wa }}
                                    </td>

                                    {{-- Instansi --}}
                                    <td
                                        class="max-w-sm py-2 px-4 overflow-hidden text-base font-normal text-black truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $user->instansi }}
                                    </td>

                                    {{-- Jenis Kelamin --}}
                                    <td
                                        class="py-2 px-4 text-base font-normal text-black whitespace-nowrap dark:text-white">
                                        {{ $user->jenis_kelamin === 'L' ? 'Laki Laki' : 'Perempuan' }}
                                    </td>

                                    {{-- Created_at --}}
                                    <td
                                        class="py-2 px-4 text-base font-normal text-black whitespace-nowrap dark:text-white">
                                        {{ $user->user->created_at->format('d-m-Y') }}
                                    </td>

                                    {{-- Last Seen --}}
                                    <td
                                        class="py-2 px-4 text-base font-normal text-black whitespace-nowrap dark:text-white">
                                        {{ $user->user->last_seen ? $user->user->last_seen->diffForHumans() : 'Never logged in' }}
                                    </td>

                                    {{-- status --}}
                                    <td
                                        class="py-2 px-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <p>status</p>
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td class="py-2 px-4 space-x-2 whitespace-nowrap">
                                        {{-- Edit users --}}
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        {{-- Delete users --}}
                                        <a href="{{ route('users.destroyy', $user->user->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                                            onclick="return confirm('Yakin ingin menghapus data ini?');">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>

                                        {{-- Show Users --}}
                                        <a href="{{ route('asesi-show', $user->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- table end --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $userProfile->links() }}
    </div>

    {{-- Pop up Delete Asesi --}}
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin delete all asesi? tindakan ini tidak dapat di kembalikan</h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        <a href="{{ route('deleteAllUsers') }}">
                            Yes, Saya yakin
                        </a>
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- popOver Delete --}}
    <x-popover title="Delete All Users" id="popover-delete">
        <strong class="text-red-500">Warning!!</strong>
        <p>Tindakan Ini akan menghapus semua pengguna dari sistem.</p>
    </x-popover>

    {{-- popOver addUser --}}
    <x-popover title="Add Users" id="popover-addUser">
        <p>Tindakan Ini akan menambahkan users baru kedalam database.</p>
    </x-popover>

    {{-- popOver Export --}}
    <x-popover title="Export Asesi" id="popover-export">
        <p>Tindakan Ini akan membuat file excel dari data asesi.</p>
    </x-popover>

@endsection