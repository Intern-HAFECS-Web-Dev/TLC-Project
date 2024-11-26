@extends('layouts.navbar')

@section('content')
    <main class="container mx-auto my-20">
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">

            <!-- Right Content -->
            <div class="col-span-full xl:col-auto">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                        <img class="h-24 xl:hidden my-3 rounded-full shadow-lg mx-auto " src="images/konten_satu.jpg"
                            alt="Bonnie image" />
                        <div class="hidden xl:block bg-biru py-3">
                            <img class="h-24 rounded-full object-cover mx-auto " src="images/konten_satu.jpg"
                                alt="Bonnie image" />
                            <span class="flex justify-center text-white my-2 text-xl font-bold  dark:text-white">{{ $user->user->name }}</span>
                        </div>
                        <div>
                            <span class="flex xl:hidden justify-center text-gray-800 mt-2 mb-4 text-xl font-bold  dark:text-white">{{ $user->user->name }}</span>

                            <div class="flex flex-col w-full">
                                <a href="{{ route('userProfile.index') }}">
                                    <button type="button"
                                        class="inline-flex items-center px-8 bg-[#BCDEF8] py-2 mt-3 text-sm font-medium text-biru  w-full">
                                        <img src="images/svg/profile.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        Profile
                                    </button>
                                </a>
                                <a href="{{ route('myCertification.index') }}">
                                    <button type="button"
                                        class="inline-flex items-center px-8 py-2 text-sm font-medium text-gray-600 hover:bg-[#BCDEF8] w-full">
                                        <img src="images/svg/mycertificate.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        My Certificate
                                    </button>
                                </a>

                                <form action="{{ route('logout') }}" method="post" id="logout-form" class="inline">
                                    @csrf
                                    <button type="button"
                                        class="inline-flex items-center px-8 py-2 text-sm font-medium text-gray-600 hover:bg-[#BCDEF8] w-full"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <img src="images/svg/logout.svg" class="w-4 h-4 mr-2 -ml-1" alt="">
                                        Log Out
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-span-2">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Profil</h3>
                    <hr class="border-gray-400 w-full mx-auto mb-2">
                    <form action="#">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                <input type="text" name="first-name" id="first-name"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Bonnie" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="nik"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                                <input type="text" name="nik" id="nik"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="NIK Anda" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tempat_lahir"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                    Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tempat Lahir Anda" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tanggal_lahir"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="15/08/1990" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="example@company.com" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone-number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Handphone</label>
                                <input type="text" maxlength="12" name="phone-number" id="phone-number"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="e.g. +(12)3456 789" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="jenis_kelamin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                    Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="" disabled selected>--Pilih Salah Satu--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="instansi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Instansi</label>
                                <select id="instansi" name="instansi"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
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
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="provinsi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                                <input type="text" name="provinsi" id="provinsi"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="React Developer" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="kabupaten"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten</label>
                                <input type="text" name="kabupaten" id="kabupaten"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Development" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="kecamatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                                <input type="number" name="kecamatan" id="kecamatan"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="123456" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="kelurahan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
                                <input type="number" name="kelurahan" id="kelurahan"
                                    class="shadow-sm bg-inputan border border-gray-300 text-gray-900 sm:text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="123456" required>
                            </div>
                            <div class="col-span-6 sm:col-full">
                                <button
                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    type="submit">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </main>
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
