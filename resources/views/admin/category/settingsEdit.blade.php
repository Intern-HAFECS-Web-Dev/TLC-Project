@extends('dashboard.adminDashboard')

@section('content')
    <div class="grid grid-cols-1 px-4 pt-6 mt-4 3xl:grid-cols-3 3xl:gap-4 dark:bg-gray-900">

        <div class="col-span-2">
            <div class="flex items-center justify-between p-2 mb-4 col-span-full xl:mb-2 bg-biru rounded-xl">
                <a href="{{ route('admin.settings.index') }}"
                    class="inline-flex items-center p-2 m-2 rounded-lg bg-greys hover:bg-kuning hover:cursor-pointer">
                    <i class="mr-2 fa-solid fa-arrow-left-long"></i> Back
                </a>
                <h1 class="mr-4 text-xl font-semibold text-white sm:text-2xl dark:text-white">EDIT LEVELS</h1>
            </div>
            <div
                class="p-4 mt-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Informasi Levels</h3>
                <form action="{{ route('admin.settings.update', $levels->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-6 gap-6">

                        {{-- Nama Level --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Level
                            </label>
                            <input type="text" name="name" id="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required placeholder="Input nama level" value="{{ $levels->name }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{-- Durasi --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Durasi (Bulan)
                            </label>
                            <input type="number" name="duration" id="duration"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input durasi perbulan" required value="{{ $levels->duration }}">
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        {{-- Benefit --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="benefit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Benefit
                            </label>
                            <input type="text" name="benefit" id="benefit"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Benefit yang didapatkan" required value="{{ $levels->benefit }}">
                            <x-input-error :messages="$errors->get('benefit')" class="mt-2" />
                        </div>

                        {{-- Pesyaratan --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Persyaratan
                            </label>
                            <input type="text" name="condition" id="condition"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Persyaratan yang diperlukan" required value="{{ $levels->condition }}">
                            <x-input-error :messages="$errors->get('condition')" class="mt-2" />
                        </div>

                        {{-- Starting Price --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Harga Awal
                            </label>
                            <input type="number" name="price" id="price"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Starting Price (100000)" required value="{{ sprintf("%.0f", $levels->price) }}">
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        {{-- Discount --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Diskon
                            </label>
                            <input type="number" name="discount" id="discount"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Diskon" required value="{{ number_format($levels->discount, 0) }}">
                            <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                        </div>

                        <!-- Image preview element -->
                        <div class="flex flex-col items-center col-span-6">
                            <button type="submit"
                                class="w-1/2 px-10 py-2 mt-10 text-sm font-medium text-white rounded-lg shadow-md bg-biru hover:bg-kuning hover:text-black">
                                SUBMIT
                            </button>
                            @if ($errors->any())
                                <ul class="text-red-600">
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif

                        </div>
                    </div>
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
