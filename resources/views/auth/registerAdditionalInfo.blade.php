@extends('layouts.tlc')

@section('content')
    <p>Halo Selamat Datang <span>{{ $user->name }}</span></p>
    <p>{{ $user->id }}</p>

    <p>{{ Auth::user()->id }}</p>

    <form action="{{ route('additional.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- Nama Lengkap --}}
        <div class="mb-10">
            <label for="fullname">Input Nama Lengkap:</label>
            <input type="text" placeholder="example name, S.T." id="fullname" name="fullname" value="{{ old('fullname') }}" required>
        </div>
        @error('fullname')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- NIK --}}
        <div class="mb-10">
            <label for="NIK">Input NIK:</label>
            <input type="number" placeholder="NIK" id="nik" name="nik" required>
        </div>
        @error('nik')
            <div class="error">{{ $message }}</div>
        @enderror
        

        {{-- Instansi --}}
        <div class="mb-10">
            <label for="instansi">Input Instansi:</label>
            <select id="instansi" name="instansi" >
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
        <div class="mb-10">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        @error('tempat_lahir')
            <div class="error">{{ $message }}</div>
        @enderror
        

        {{-- tanggal lahir --}}
        <div class="mb-10">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        @error('tanggal_lahir')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- jenis kelamin --}}
        <div class="mb-10">
            <label for="instansi">Jenis Kelamin:</label>
            <select id="instansi" name="jenis_kelamin" >
                <option value="" disabled selected>--Pilih Salah Satu--</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        @error('jenis_kelamin')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- no wa --}}
        <div class="mb-10">
            <label for="no_wa">Nomor Whatsapp:</label>
            <input type="number" id="no_wa" name="no_wa" placeholder="08xxxxxx" required>
        </div>
        @error('no_wa')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- provinsi --}}
        <div class="mb-10">
            <select id="province" name="provinsi">
                <option value="">Pilih Provinsi</option>
                @foreach($provinces as $province)
                    <option value="{{ $province->name }}">{{ $province->name }}</option> <!-- Menggunakan name -->
                @endforeach
            </select>
        </div>

        {{-- kabupaten/kota --}}
        <div class="mb-10">
            <select id="regency" name="kabupaten" disabled>
                <option value="">Pilih Kabupaten/Kota</option>
            </select>
        </div>

        {{-- kecamatan --}}
        <div class="mb-10">
            <select id="district" name="kecamatan" disabled>
                <option value="">Pilih Kecamatan</option>
            </select>
        </div>

        {{-- kelurahan --}}
        <div class="mb-10">
            <select id="village" name="kelurahan" disabled>
                <option value="">Pilih Kelurahan</option>
            </select>
        </div>

        {{-- image user --}}
        <div class="mt-10">
            <img id="profilePreview" src="default-profile.png" alt="Profile Picture">
            <input type="file" id="profileInput" name="profile_image" accept=".jpg, .jpeg, .png" class="upload-btn">
        </div>
        @error('profile_image')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- submit button --}}
        <button type="submit" class="bg-blue-200 px-2">Submit</button>
    </form>    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const profileInput = document.getElementById('profileInput');
        const profilePreview = document.getElementById('profilePreview');
    
        profileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profilePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    
        $(document).ready(function() {
    // Ketika provinsi dipilih
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
                    $('#regency').append('<option value="' + value.name + '">' + value.name + '</option>'); // Menggunakan name
                });
            }).fail(function() {
                alert('Error fetching regencies');
            });
        }
    });

    // Ketika kabupaten/kota dipilih
    $('#regency').change(function() {
        var regencyName = $(this).val();
        $('#district').prop('disabled', !regencyName);
        $('#village').prop('disabled', true);
        $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
        $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

        if (regencyName) {
            $.get('/districts/' + regencyName, function(data) {
                $.each(data, function(key, value) {
                    $('#district').append('<option value="' + value.name + '">' + value.name + '</option>'); // Menggunakan name
                });
            }).fail(function() {
                alert('Error fetching districts');
            });
        }
    });

    // Ketika kecamatan dipilih
    $('#district').change(function() {
        var districtName = $(this).val();
        $('#village').prop('disabled', !districtName);
        $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

        if (districtName) {
            $.get('/villages/' + districtName, function(data) {
                $.each(data, function(key, value) {
                    $('#village').append('<option value="' + value.name + '">' + value.name + '</option>'); // Menggunakan name
                });
            }).fail(function() {
                alert('Error fetching villages');
            });
        }
    });
});
    </script>

@endsection