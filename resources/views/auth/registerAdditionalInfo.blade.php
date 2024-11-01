{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>
<body>
    <div class="flex">

    </div>
    <p>Halo Selamat Datang <span>{{ $user->name }}</span></p>
    <p>{{ $user->id }}</p>
    
    <select id="province" name="province">
        <option value="">Pilih Provinsi</option>
        @foreach($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>
    
    <select id="regency" name="regency" disabled>
        <option value="">Pilih Kabupaten/Kota</option>
    </select>
    
    <select id="district" name="district" disabled>
        <option value="">Pilih Kecamatan</option>
    </select>
    
    <select id="village" name="village" disabled>
        <option value="">Pilih Kelurahan</option>
    </select>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika provinsi dipilih
            $('#province').change(function() {
                var provinceId = $(this).val();
                $('#regency').prop('disabled', !provinceId);
                $('#district').prop('disabled', true);
                $('#village').prop('disabled', true);
                $('#regency').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (provinceId) {
                    $.get('/regencies/' + provinceId, function(data) {
                        $.each(data, function(key, value) {
                            $('#regency').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
    
            // Ketika kabupaten/kota dipilih
            $('#regency').change(function() {
                var regencyId = $(this).val();
                $('#district').prop('disabled', !regencyId);
                $('#village').prop('disabled', true);
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (regencyId) {
                    $.get('/districts/' + regencyId, function(data) {
                        $.each(data, function(key, value) {
                            $('#district').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
    
            // Ketika kecamatan dipilih
            $('#district').change(function() {
                var districtId = $(this).val();
                $('#village').prop('disabled', !districtId);
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (districtId) {
                    $.get('/villages/' + districtId, function(data) {
                        $.each(data, function(key, value) {
                            $('#village').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
        });
    </script>
    
</body>
</html> --}}

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
            <input type="text" placeholder="example name, S.T." id="fullname" name="fullname" required>
        </div>

        {{-- NIK --}}
        <div class="mb-10">
            <label for="NIK">Input NIK:</label>
            <input type="number" placeholder="NIK" id="nik" name="nik" required>
        </div>

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

        {{-- tanggal lahir --}}
        <div class="mb-10">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        {{-- jenis kelamin --}}
        <div class="mb-10">
            <label for="instansi">Jenis Kelamin:</label>
            <select id="instansi" name="jenis_kelamin" >
                <option value="" disabled selected>--Pilih Salah Satu--</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        {{-- no wa --}}
        <div class="mb-10">
            <label for="no_wa">Nomor Whatsapp:</label>
            <input type="number" id="no_wa" name="no_wa" placeholder="08xxxxxx" required>
        </div>

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
    

{{-- <form class="max-w-md mx-auto">
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
      </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
      </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
      </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
      </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form> --}}
  
    
@endsection