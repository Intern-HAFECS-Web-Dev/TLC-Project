@extends('dashboard.adminDashboard')

@section('content')
    <div class="grid grid-cols-1 px-4 pt-6 mt-4 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">

        <x-back-navigation-header href="{{ route('admin.users.index') }}">
            Show Asesi
        </x-back-navigation-header>

        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">

            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0"
                        src="{{ asset('/storage/' . $users->profile_image) }}" alt="Jese picture">
                    <div>
                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>

                        <div class="flex gap-4">
                            <!-- Show Image Button -->
                            <button onclick="togglePopup(true)" class="p-2 bg-yellow-300 rounded-lg">
                                <p class="text-sm font-medium">Show Image</p>
                            </button>

                            <!-- Download Image Button -->

                            <button class="p-2 bg-blue-600 rounded-lg">
                                <a href="{{ route('admin.users.DownloadImg', $users->id) }}">
                                    <p class="text-sm font-medium text-white">Download Image</p>
                                </a>
                            </button>
                        </div>
                    </div>

                    <!-- Popup Container -->
                    <div id="popup"
                        class="fixed inset-0 z-50 items-center justify-center hidden bg-gray-800 bg-opacity-50">
                        <div class="relative w-3/4 p-4 bg-white rounded-lg shadow-lg md:w-1/2">
                            <button onclick="togglePopup(false)"
                                class="absolute text-gray-500 top-2 right-2 hover:text-gray-900">
                                ✖
                            </button>
                            <div class="flex flex-col items-center">
                                <!-- Profile Image -->
                                <img id="profileImage" src="{{ asset('/storage/' . $users->profile_image) }}"
                                    alt="Profile Picture" class="object-cover w-full rounded-lg max-h-96">
                                <p class="mt-4 text-sm text-gray-600">User Profile Picture</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Infomasi Tambahan</h3>
                <div class="mb-4">
                    <x-show-user-field for="Last Seen" label="Last Seen">
                        {{ $users->user->last_seen ? $users->user->last_seen->diffForHumans() : 'Never logged in' }}
                    </x-show-user-field>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Informasi Asesi</h3>
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Nama Lengkap" label="Nama Lengkap">
                                {{ $users->user->name }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Email" label="Nama Gelar">
                                {{ $users->fullname }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="email" label="Email">
                                {{ $users->user->email }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Jenis Kelamin" label="Jenis Kelamin">
                                {{ $users->jenis_kelamin === 'L'
                                    ? 'Laki-Laki'
                                    : ($users->jenis_kelamin === 'P'
                                        ? 'Perempuan'
                                        : 'Tidak Diketahui') }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="No Whatsapp" label="No Whatsapp">
                                {{ $users->no_wa }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="NIK" label="NIK">
                                {{ $users->nik }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Instansi" label="Instansi">
                                {{ $users->instansi }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Tempat Lahir" label="Tempat Lahir">
                                {{ $users->tempat_lahir }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Tanggal Lahir" label="Tanggal Lahir">
                                {{ $users->tanggal_lahir }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Provinsi" label="Provinsi">
                                {{ $users->provinsi }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Kabupaten" label="Kabupaten">
                                {{ $users->kabupaten }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Kecamatan" label="Kecamatan">
                                {{ $users->kecamatan }}
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="Kelurahan" label="Kelurahan">
                                {{ $users->kelurahan }}
                            </x-show-user-field>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle Popup
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