@extends('dashboard.adminDashboard')

@section('content')
    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900 mt-4">

        <x-back-navigation-header href="{{ url()->previous() }}">
            Admin Settings
        </x-back-navigation-header>

        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">

            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-md 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="#" alt="Jese picture">
                    <div>
                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>

                        <div class="flex gap-4">
                            <!-- Show Image Button -->
                            <button onclick="togglePopup(true)" class="p-2 bg-yellow-300 rounded-lg">
                                <p class="font-medium text-sm">Show Image</p>
                            </button>

                            <!-- Download Image Button -->
                            <button class="p-2 bg-biru hover:bg-blue-800 rounded-lg" 
                            data-modal-target="edit-img-modal" 
                            data-modal-toggle="edit-img-modal" >
                                <p class="font-medium text-sm text-white">Edit Image</p>
                            </button>
                        </div>
                    </div>

                    <!-- Popup Container -->
                    <div id="popup"
                        class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center z-50">
                        <div class="relative bg-white rounded-lg shadow-lg p-4 w-3/4 md:w-1/2">
                            <button onclick="togglePopup(false)"
                                class="absolute top-2 right-2 text-gray-500 hover:text-gray-900">
                                ✖
                            </button>
                            <div class="flex flex-col items-center">
                                <!-- Profile Image -->
                                <img id="profileImage" src="{{ asset('/storage/' . $img->profile_image) }}" alt="Profile Picture"
                                    class="rounded-lg w-full max-h-96 object-cover">
                                <p class="mt-4 text-gray-600 text-sm">User Profile Picture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-md 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Infomasi Tambahan</h3>
                <div class="mb-4">
                    <x-show-user-field for="Last Seen" label="Last Seen">
                        {{-- {{ $users->user->last_seen ? $users->user->last_seen->diffForHumans() : 'Never logged in' }} --}}
                    </x-show-user-field>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-md 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class=" text-xl font-semibold dark:text-white">Informasi Profile</h3>
                <p class=" font-medium text-gray-700 dark:text-white">Perbarui informasi profil dan alamat email akun Anda
                </p>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form action="{{ route('profile.update') }}" class="mt-4" method="post">
                    @csrf
                    @method('patch')

                    <div class="grid grid-cols-6 gap-6">
                        {{-- Nama --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama
                            </label>
                            <input type="text" name="name" id="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required autofocus autocomplete="name" placeholder="Input Nama anda"
                                value="{{ old('name', $user->name) }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email
                            </label>
                            <input type="email" name="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required autofocus autocomplete="email" placeholder="Input Email anda"
                                value="{{ old('email', $user->email) }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <button type="submit"
                                class="py-2 px-6 font-medium bg-biru rounded-lg text-white hover:bg-blue-800">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-md 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class=" text-xl font-semibold dark:text-white">Update Password</h3>
                <p class=" font-medium text-gray-700 dark:text-white">
                    Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman
                </p>

                <form action="{{ route('password.update') }}" class="mt-4" method="post">
                    @csrf
                    @method('put')

                    <div class="grid grid-cols-6 gap-6">
                        {{-- Old Password --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="update_password_current_password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password Lama
                            </label>
                            <input type="password" name="current_password" id="update_password_current_password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                autocomplete="current-password" placeholder="Password Lama">
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        {{-- Update Password --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="update_password_password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Update Password
                            </label>
                            <input type="password" name="password" id="update_password_password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                autocomplete="new-password" placeholder="Password Baru">
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        {{-- Confirm Password --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="update_password_password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Confirm Password
                            </label>
                            <input type="password" name="password_confirmation" id="update_password_password_confirmation"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                autocomplete="new-password" placeholder="Confirmasi Password Baru">
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <button type="submit"
                                class="py-2 px-6 mt-6 font-medium bg-biru rounded-lg text-white hover:bg-blue-800">
                                Save
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="edit-img-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Upload Your Image
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('profile.editImg') }}" method="post">
                        @csrf
                        <div>
                            <label for="profile_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Image</label>
                            <input type="file" name="profile_image" id="profile_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" accept=".jpg, .jpeg, .png" required />
                        </div>
                        <button type="submit" class="w-full text-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    @if (session('status') === 'password-updated')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your Profile has been updated.',
                    timer: 3000, // 
                    showConfirmButton: false,
                });
            });
        </script>
    @endif

    <script>
        function togglePopup(show) {
            const popup = document.getElementById('popup');
            if (show) {
                popup.classList.remove('hidden');
                popup.classList.add('flex');
            } else {
                popup.classList.remove('flex');
                popup.classList.add('hidden');
            }
        }
    </script>
@endsection
