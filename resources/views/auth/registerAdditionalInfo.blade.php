@extends('layouts.tlc')

@section('content')
    <div class="flex h-screen ">
        <div class="w-1/2 h-full bg-cover bg-center hidden lg:block"
            style="background-image: url({{ asset('assets/img/loginPage.jpg') }})">
        </div>
        <div class="lg:w-1/2 w-full mx-auto h-screen overflow-y-scroll p-8">
            <p class="pb-5 max-w-lg mx-auto">Halo Selamat Datang <span>{{ $user->name }}</span></p>
            <form action="{{ route('additional.store') }}" class="max-w-lg mx-auto" method="post"
                enctype="multipart/form-data">
                @csrf
                {{-- Nama Lengkap --}}
                <div class="mb-7">
                    <label class="pr-2" for="fullname">Nama Lengkap:</label>
                    <input class="w-full" maxlength="50" type="text" placeholder="example name, S.T." id="fullname"
                        name="fullname" required value="{{ old('fullname') }}">
                </div>
                @error('fullname')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- NIK --}}
                <div class="mb-7">
                    <label class="pr-2" for="NIK">NIK:</label>
                    <input class="w-full" maxlength="20" type="text" placeholder="NIK(ANGKA)" id="nik"
                        name="nik" required>
                </div>
                @error('nik')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- Instansi --}}
                <div class="mb-7">
                    <label for="instansi">Pilih Instansi:</label>
                    <select id="instansi" name="instansi" class="w-full">
                        <option value="" disabled selected>--Pilih Salah Satu--</option>
                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        <option value="Perguruan Tinggi">Pemerintah</option>
                        <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                        <option value="Sekolah Menengah Kejuruan">Sekolah Menengah Kejuruan</option>
                        <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                        <option value="Sekolah Dasar">Sekolah Dasar</option>
                        <option value="Lembaga Kursus">Lembaga Kursus</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                {{-- tempat lahir --}}
                <div class="mb-7">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input class="w-full" type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir"
                        required>
                </div>
                @error('tempat_lahir')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- tanggal lahir --}}
                <div class="mb-7">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input class="w-full" type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                @error('tanggal_lahir')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- jenis kelamin --}}
                <div class="mb-7">
                    <label for="instansi">Jenis Kelamin:</label>
                    <select id="instansi" name="jenis_kelamin" class="w-full">
                        <option value="" disabled selected>--Pilih Salah Satu--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                @error('jenis_kelamin')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- no wa --}}
                <div class="mb-7">
                    <label for="no_wa">Nomor Whatsapp:</label>
                    <input class="w-full" type="text" id="no_wa" name="no_wa" placeholder="08xxxxxx" required>
                </div>
                @error('no_wa')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- provinsi --}}
                <div class="mb-7">
                    <select id="province" name="provinsi" class="w-full">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->name }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- kabupaten/kota --}}
                <div class="mb-7">
                    <select id="regency" name="kabupaten" disabled class="w-full">
                        <option value="">Pilih Kabupaten/Kota</option>
                    </select>
                </div>

                {{-- kecamatan --}}
                <div class="mb-7">
                    <select id="district" name="kecamatan" disabled class="w-full">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>

                {{-- kelurahan --}}
                <div class="mb-7">
                    <select id="village" name="kelurahan" disabled class="w-full">
                        <option value="">Pilih Kelurahan</option>
                    </select>
                </div>

                {{-- image user --}}
                <div class="mb-2">
                    {{-- <img id="profilePreview" src="default-profile.png" alt="Profile Picture"> --}}
                    <label class="block mb-2 text-lg font-semibold text-gray-900 dark:text-white" for="profilInput">Upload
                        Profile: </label>
                    <input
                        class="w-full upload-btn block text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="profilInput_help" name="profile_image" accept=".jpg, .jpeg, .png"
                        id="profilInput" type="file">
                    {{-- <input type="file" id="profileInput" name="profile_image" accept=".jpg, .jpeg, .png"
                            class="upload-btn"> --}}
                </div> {{-- <button type="submit" class="bg-blue-200 px-2 mt-3">Submit</button> --}}

                <button type="submit"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Submit
                    </span>
                </button>

                <p class="text-sm text-gray-500 mt-12">&copy; {{ date('Y') }} Teaching Learning Certification - All
                    Rights Reserved.</p>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // const profileInput = document.getElementById('profileInput');
        const profilePreview = document.getElementById('profilePreview');

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
                            'Error fetching regencies'); // Ganti alert dengan console.error
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
    </script>
@endsection