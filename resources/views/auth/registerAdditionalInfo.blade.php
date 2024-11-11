@extends('layouts.tlc')

@section('content')
    <div class="flex h-screen bg-gray-100">
        <div class="w-1/2 h-full bg-cover bg-center hidden lg:block"
            style="background-image: url({{ asset('assets/img/loginPage.jpg') }})">
        </div>
        <div class="lg:w-1/2 w-full mx-auto h-screen overflow-y-scroll p-8">
            {{-- <p class="pb-5 max-w-lg mx-auto">Halo Selamat Datang <span>{{ $user->name }}</span></p> --}}
            <form action="{{ route('additional.store') }}" class="max-w-lg mx-auto" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-100 dark:bg-gray-800 dark:text-yellow-300"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <p>Silakan melengkapi form berikut untuk mengakses Platform Teaching Learning Certification</p>
                    </div>
                </div>

                {{-- Nama Lengkap --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label class="pr-2 font-semibold" for="fullname">Nama Lengkap Dengan Gelar (Opsional)</label>
                    <p class="italic">Silakan masukkan nama asli dan gelar akademik Anda (jika ada) guna
                        penerbitan sertifikat.</p>
                    <p class="italic text-yellow-400">Jika tidak ada gelar akademik maka otomatis akan menggunakan
                        Fullname anda yaitu : {{ $user->name }}</p>
                    <input
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        maxlength="50" type="text" placeholder="Example Name, S.T." id="fullname" name="fullname"
                        value="{{ old('fullname') }}">
                    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                </div>


                {{-- NIK --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <div class="mb-7">
                        <label class="pr-2 font-semibold" for="NIK">Nomor Induk Keluarga <span
                                class="text-red-500">*</span></label>
                        <p class="italic">Pastikan NIK anda sudah terisi dengan benar dan tanpa spasi</p>
                        <input
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            maxlength="20" type="number" placeholder="Nomor Induk Keluarga (Angka)" id="nik"
                            name="nik" required>
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>
                </div>

                {{-- instansi --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="instansi" class="pr-2 font-semibold">Pilih Instansi <span
                            class="text-red-500">*</span></label>
                    <select id="instansi" name="instansi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
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
                    <input type="text" id="custom-instansi" name="custom_instansi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        placeholder="Masukkan instansi lain" style="display: none;">
                    <x-input-error :messages="$errors->get('instansi')" class="mt-2" />
                </div>

                {{-- tempat lahir --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="tempat_lahir" class="pr-2 font-semibold">Tempat Lahir <span
                            class="text-red-500">*</span></label>
                    <input
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" required>
                    <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                </div>

                {{-- tanggal lahir --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="tanggal_lahir" class="pr-2 font-semibold">Tanggal Lahir<span
                            class="text-red-500">*</span></label>
                    <input
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                </div>

                {{-- jenis kelamin --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="instansi" class="pr-2 font-semibold">Jenis Kelamin <span
                            class="text-red-500">*</span></label>
                    <select id="instansi" name="jenis_kelamin"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="" disabled selected>--Pilih Salah Satu--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                </div>

                {{-- no wa --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="no_wa" class="pr-2 font-semibold">Nomor Whatsapp <span
                            class="text-red-500">*</span></label>
                    <input
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        type="number" id="no_wa" name="no_wa" placeholder="08xxxxxx" required>
                    <x-input-error :messages="$errors->get('no_wa')" class="mt-2" />
                </div>

                {{-- provinsi --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="province" class="pr-2 font-semibold">Provinsi Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="province" name="provinsi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->name }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- kabupaten/kota --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="regency" class="pr-2 font-semibold">Kabupeten/Kota Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="regency" name="kabupaten" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kabupaten/Kota</option>
                    </select>
                </div>

                {{-- kecamatan --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="district" class="pr-2 font-semibold">kecamatan Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="district" name="kecamatan" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>

                {{-- kelurahan --}}
                <div class="bg-white p-6 rounded-lg shadow-md mb-7">
                    <label for="village" class="pr-2 font-semibold">Kelurahan Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="village" name="kelurahan" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kelurahan</option>
                    </select>
                </div>

                {{-- Image user --}}
                <div class="bg-white p-4 rounded-lg shadow-md mb-7 flex gap-10">
                    <!-- Image preview element -->
                    <div>
                    <img id="profilePreview" src="{{ asset('storage/images/blankProfile.png') }}" alt="Profile Picture"
                        class="w-24 h-24 rounded-full my-auto">
                    </div>

                    <div class="mt-3">
                        <label class="pr-2 font-semibold" for="profilInput">
                            Upload Foto Profile (opsional)
                        </label>
                        <input
                        class="w-full upload-btn block text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="profilInput_help" name="profile_image" accept=".jpg, .jpeg, .png"
                        id="profilInput" type="file" onchange="previewImage(event)">
                        <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                    </div>
                </div>
                <button type="submit"
                    class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Submit
                    </span>
                </button>
                <p class="text-sm text-gray-500 mt-12">&copy; {{ date('Y') }} Teaching Learning Certification - All
                    Rights Reserved.</p>
            </form>
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
