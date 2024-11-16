@extends('dashboard.adminDashboard')

@section('content')
    <div class="grid grid-cols-1 px-4 pt-6 3xl:grid-cols-3 3xl:gap-4 dark:bg-gray-900">

        <div class="col-span-2">
            <div class="mb-4 col-span-full xl:mb-2 bg-biru p-2 rounded-xl flex items-center justify-between">
                <a href="{{ route('users.index') }}"
                    class="bg-greys p-2 m-2 rounded-lg hover:bg-kuning hover:cursor-pointer inline-flex items-center">
                    <i class="fa-solid fa-arrow-left-long mr-2"></i> Back
                </a>
                <h1 class="text-xl mr-4 font-semibold text-white sm:text-2xl dark:text-white">CREATE USER</h1>
            </div>
            <div
                class="p-4 mt-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Informasi Users</h3>
                <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">

                        {{-- Nama Lengkap --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Lengkap
                            </label>
                            <input type="text" name="name" id="first-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required placeholder="Input Nama Lengkap" value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{-- Nama Gelar --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Gelar
                            </label>
                            <input type="text" name="fullname" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Nama Gelar" required value="{{ old('fullname') }}">
                            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                        </div>

                        {{-- Nomor Whatsapp --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nomor Whatsapp
                            </label>
                            <input type="number" name="no_wa" id="number"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Nomor Whatsapp" required value="{{ old('no_wa') }}">
                            <x-input-error :messages="$errors->get('number')" class="mt-2" />
                        </div>

                        {{-- NIK --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                NIK
                            </label>
                            <input type="number" name="nik" id="nik"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Nomor Induk Keluarga" required value="{{ old('nik') }}">
                            <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                        </div>

                        {{-- Instansi --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Instansi
                            </label>
                            <select id="instansi" name="instansi"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                onchange="showCustomInput()">
                                <option value="" disabled selected>--Pilih Salah Satu--</option>
                                <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                <option value="Pemerintah">Pemerintah</option>
                                <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                                <option value="Sekolah Menengah Kejuruan">Sekolah Menengah Kejuruan</option>
                                <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                                <option value="Sekolah Dasar">Sekolah Dasar</option>
                                <option value="Lembaga Kursus">Lembaga Kursus</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <x-input-error :messages="$errors->get('instansi')" class="mt-2" />

                        </div>

                        {{-- Tempat Lahir --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tempat Lahir
                            </label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Tempat Lahir" required value="{{ old('tempat_lahir') }}">
                            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Kelamin</label>
                            <select id="instansi" name="jenis_kelamin"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value=""selected disabled>--Pilih Salah Satu--</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                        </div>

                        {{-- Tanggal_Lahir --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tanggal Lahir
                            </label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="example@company.com" required value="{{ old('tanggal_lahir') }}">
                            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="province"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi Domisili
                                <span class="text-red-500">*</span></label>
                            <select id="province" name="provinsi"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" disabled selected>--Pilih Salah Satu--</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->name }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- kabupaten/kota --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="regency"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupeten/Kota
                                Domisili <span class="text-red-500">*</span></label>
                            <select id="regency" name="kabupaten" disabled
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                            <x-input-error :messages="$errors->get('kabupaten')" class="mt-2" />
                        </div>

                        {{-- Kecamatan --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="district"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kecamatan Domisili
                                <span class="text-red-500">*</span></label>
                            <select id="district" name="kecamatan" disabled
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
                        </div>

                        {{-- kelurahan --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="village"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan Domisili
                                <span class="text-red-500">*</span></label>
                            <select id="village" name="kelurahan" disabled
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Pilih Kelurahan</option>
                            </select>
                            <x-input-error :messages="$errors->get('kelurahan')" class="mt-2" />
                        </div>

                        {{-- email --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email User</label>
                            <input type="email" name="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Email Users" required value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- password --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Input Password Users" required value="{{ old('password') }}">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Image preview element -->
                        <div class="flex flex-col items-center">
                            <!-- Profile Picture Preview -->
                            <div class="mb-4">
                                <img id="profilePreview" 
                                    src="{{ asset('images/blankProfile.png') }}" 
                                    alt="Profile Picture" 
                                    class="w-24 h-24 rounded-2xl shadow-md border-2 border-gray-300">
                            </div>
                        
                            <!-- Upload Input -->
                            <div class="w-full mt-3">
                                <label for="profilInput" class="block text-sm font-medium text-gray-700 mb-2">
                                    Upload Foto Profile <span class="text-gray-500 text-xs">(opsional)</span>
                                </label>
                                <input 
                                    id="profilInput" 
                                    name="profile_image" 
                                    type="file" 
                                    accept=".jpg, .jpeg, .png" 
                                    onchange="previewImage(event)" 
                                    class="w-full block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-400 dark:border-gray-600 dark:placeholder-gray-400">
                                <p id="profilInput_help" class="mt-1 text-xs text-gray-500">Format file: JPG, JPEG, PNG. Maksimal 2MB.</p>
                        
                                <!-- Error Message -->
                                <x-input-error :messages="$errors->get('profile_image')" class="mt-2 text-red-500" />
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-biru px-10 py-2 mt-10 text-sm font-medium rounded-lg shadow-md hover:bg-kuning hover:text-black text-white">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Hide arrows for number inputs */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            /* For Firefox */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // const profileInput = document.getElementById('profileInput');
        const profilePreview = document.getElementById('profilePreview');

        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            // When the file is loaded, set it as the src for the preview image
            reader.onload = function() {
                const profilePreview = document.getElementById('profilePreview');
                profilePreview.src = reader.result;
            };

            // Read the file as a data URL
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function() {
            $('#province').change(function() {
                var provinceName = $(this).val();

                $('#regency').prop('disabled', !provinceName);
                $('#district').prop('disabled', true);
                $('#village').prop('disabled', true);
                $('#regency').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                if (provinceName) {
                    $.get('/regencies/' + provinceName, function(data) {
                        $.each(data, function(key, value) {
                            $('#regency').append('<option value="' + value.name + '">' +
                                value.name + '</option>');
                        });
                    }).fail(function() {
                        console.error(
                            'Error fetching regencies');
                    });
                }
            });

            $('#regency').change(function() {
                var regencyName = $(this).val();

                $('#district').prop('disabled', !regencyName);
                $('#village').prop('disabled', true);
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                if (regencyName) {
                    $.get('/districts/' + regencyName, function(data) {
                        $.each(data, function(key, value) {
                            $('#district').append('<option value="' + value.name + '">' +
                                value.name + '</option>');
                        });
                    }).fail(function() {
                        console.error(
                            'Error fetching districts'); // Ganti alert dengan console.error
                    });
                }
            });

            $('#district').change(function() {
                var districtName = $(this).val();

                $('#village').prop('disabled', !districtName);
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                if (districtName) {
                    $.get('/villages/' + districtName, function(data) {
                        $.each(data, function(key, value) {
                            $('#village').append('<option value="' + value.name + '">' +
                                value.name + '</option>');
                        });
                    }).fail(function() {
                        console.error(
                            'Error fetching villages'); // Ganti alert dengan console.error
                    });
                }
            });
        });

        function showCustomInput() {
            var instansiSelect = document.getElementById("instansi");
            var customInput = document.getElementById("custom-instansi");

            if (instansiSelect.value === "Lainnya") {
                customInput.style.display = "block";
                customInput.required = true;
            } else {
                customInput.style.display = "none";
                customInput.required = false; // 
            }
        }
    </script>
@endsection
