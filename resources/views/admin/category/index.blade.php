@extends('dashboard.adminDashboard')
@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-2">
                <nav class="flex mt-4 mb-5 md:justify-between flex-wrap" aria-label="Breadcrumb">
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
                                Level A
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
                                    Level B
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
                                    Level C
                                </span>
                            </div>
                        </li>
                    </ol>

                    <div class="pt-2 md:pt-0">
                        <button id="openModal"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto ">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Kategori Soal
                        </button>

                        <div id="modal"
                            class="fixed px-4 md:px-0 inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
                            <div class="w-full md:w-1/3 bg-white rounded-lg shadow-lg">
                                <!-- Header Modal -->
                                <div class="flex items-center justify-between p-4 border-b">
                                    <h2 class="text-xl font-bold">Tambah Kategori</h2>
                                    <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
                                </div>
                                <!-- Isi Modal -->
                                <div class="p-4">
                                    <form action="{{ route('admin.categori.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                            Kategori</label>
                                        <input type="text" id="name" name="name"
                                            class="w-full p-2 mt-2 border rounded" placeholder="Masukkan Nama Kategori">

                                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                                        <input type="file" id="image" name="image_categori"
                                            class="w-full p-2 mt-2 border rounded" placeholder="input image">

                                        <div class="mt-4">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <!-- Input tersembunyi untuk nilai 0 jika checkbox tidak dicentang -->
                                                <input type="hidden" name="is_locked" value="0">
                                                <!-- Checkbox untuk nilai 1 ketika dicentang -->
                                                <input id="is_locked" name="is_locked" type="checkbox" value="1"
                                                    class="sr-only peer" checked>
                                                <div
                                                    class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                </div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    @if (old('is_locked', 1) == 1)
                                                        Dikunci ?
                                                    @else
                                                        Dibuka ?
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <button type="submit"
                                            class="px-4 py-2 mt-4 text-white bg-green-500 rounded shadow hover:bg-green-600">
                                            Save
                                        </button>
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>
            </div>
            </nav>


        </div>

    </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <div class="px-4 py-8 lg:flex lg:px-auto lg:flex-wrap lg:justify-center ">
                        @forelse ($categoris as $category)
                            {{-- Card Luar --}}
                            <div
                                class="mb-5 mx-3 bgwhite w-full h-[230px] md:h-[280px] shadow-md rounded-t-lg overflow-hidden lg:w-[350px] lg:h-[290px]">
                                {{-- Card Dalam --}}
                                <div
                                    class=" bg-white w-full h-[164px] md:h-[197px] overflow-hidden lg:w-[350px] lg:h-[236px] mx-auto">
                                    {{-- <img src="{{ Storage::url($category->image_categori) }}" alt="Category Image" --}}
                                    <img src="{{ asset('storage/'. $category->image_categori) }}" alt="Category Image"
                                        class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                                    <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                                        <h3
                                            class="mx-auto text-base font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                            {{ $category->name }}</h3>

                                    </div>
                                </div>
                                {{-- Card Dalam --}}
                                <div class="flex items-end justify-center px-2 gap-2 pt-2">
                                    {{-- Lihat Soal --}}
                                    <button type="button" title="Lihat Soal"
                                        onclick="window.location.href='{{ route('admin.categori.questions.index', $category) }}';"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:ring-primary-300">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    {{-- Lihat Soal --}}

                                    {{-- Edit Soal --}}
                                    <button type="button" title="Edit Soal" id="openEditModal"
                                        data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                        data-image="{{ Storage::url($category->image_categori) }}"
                                        data-is_locked="{{ $category->is_locked }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>

                                    <div id="editModal"
                                        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-50 px-4">
                                        <div class="w-full md:w-1/3 bg-white rounded-lg shadow-lg">
                                            <div class="flex items-center justify-between p-4 border-b">
                                                <h2 class="text-xl font-bold">Edit Kategori</h2>
                                                <button id="closeEditModal"
                                                    class="text-gray-500 hover:text-gray-700">&times;</button>
                                            </div>
                                            <div class="p-4">
                                                <form id="editForm" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Nama
                                                        Kategori</label>
                                                    <input type="text" id="modalName" name="name"
                                                        class="w-full p-2 mt-2 border rounded"
                                                        placeholder="Masukkan Nama Kategori">

                                                    <label for="image"
                                                        class="block text-sm font-medium text-gray-700">Gambar</label>
                                                    <input type="file" id="modalImage" name="image_categori"
                                                        class="w-full p-2 mt-2 border rounded">
                                                    <img id="previewImage" src="" alt="Category Image"
                                                        class="h-24 mt-3 mx-auto">
                                                    <div>
                                                        <label class="inline-flex items-center cursor-pointer">
                                                            <input id="is_locked_edit" type="checkbox"
                                                                class="sr-only peer" name="is_locked">
                                                            <div
                                                                class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                            </div>
                                                            <span
                                                                class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">apakah
                                                                dibuka?</span>
                                                        </label>
                                                    </div>

                                                    <button type="submit"
                                                        class="px-4 py-2 mt-4 text-white bg-green-500 rounded shadow hover:bg-green-600">
                                                        Save
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Edit Soal --}}

                                    {{-- Hapus Soal --}}
                                    <form action="{{ route('admin.categori.destroy', $category) }}" method="post">
                                        @csrf

                                        @method('delete')
                                        <button type="submit" title="Hapus Soal"
                                            onclick="return confirm('Are you sure?')"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    {{-- Hapus Soal --}}
                                </div>
                            </div>
                            {{-- Card Luar --}}
                        @empty
                            <p>Tidak ada kategori</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        const openModal = document.getElementById('openModal');
        const closeModal = document.getElementById('closeModal');
        const modal = document.getElementById('modal');
        const body = document.body;
    
        // Fungsi untuk membuka modal
        openModal.addEventListener('click', () => {
            modal.classList.remove('hidden'); // Menghapus kelas 'hidden' agar modal terbuka
            body.classList.add('modal-open'); // Menambahkan kelas untuk menandakan modal terbuka
        });
    
        // Fungsi untuk menutup modal
        const close = () => {
            modal.classList.add('hidden'); // Menambahkan kelas 'hidden' untuk menyembunyikan modal
            body.classList.remove('modal-open'); // Menghapus kelas modal-open
        };
    
        closeModal.addEventListener('click', close); // Menutup modal ketika tombol close diklik
    
        // Menutup modal ketika klik di luar area modal
        modal.addEventListener('click', (e) => {
            if (e.target === modal) close(); // Cek apakah klik di luar modal
        });
    
        // Menangani perubahan status checkbox is_locked
        document.getElementById('is_locked').addEventListener('change', () => {
            const isChecked = document.getElementById('is_locked').checked;
            if (isChecked) {
                document.getElementById('is_locked').value = 1;
            } else {
                document.getElementById('is_locked').checked = false;
                document.getElementById('is_locked').value = 0;
            }
        });
    
        // Menangani perubahan status checkbox is_locked pada modal edit
        document.getElementById('is_locked_edit').addEventListener('change', () => {
            const isChecked = document.getElementById('is_locked_edit').checked;
            if (isChecked) {
                document.getElementById('is_locked_edit').value = 1;
                document.getElementById('is_locked_edit').checked = true;
            } else {
                document.getElementById('is_locked_edit').checked = false;
                document.getElementById('is_locked_edit').value = 0;
            }
        });
    
        // Mengatur data untuk modal edit
        document.querySelectorAll('#openEditModal').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const image = button.getAttribute('data-image');
                const is_locked = button.getAttribute('data-is_locked');
    
                document.getElementById('modalName').value = name;
    
                // Mengatur checkbox is_locked di modal edit
                if (is_locked == 1) {
                    document.getElementById('is_locked_edit').value = 1;
                    document.getElementById('is_locked_edit').checked = true;
                } else {
                    document.getElementById('is_locked_edit').value = 0;
                    document.getElementById('is_locked_edit').checked = false;
                }
    
                document.getElementById('previewImage').src = image; // Menampilkan gambar yang sudah dipilih
    
                // Menyusun ulang form action untuk edit
                const editForm = document.getElementById('editForm');
                editForm.action = `/admin/categori/${id}`; // Update form action dengan ID yang sesuai
    
                // Menampilkan modal edit
                document.getElementById('editModal').classList.remove('hidden');
            });
        });
    
        // Menutup modal edit
        document.getElementById('closeEditModal').addEventListener('click', () => {
            document.getElementById('editModal').classList.add('hidden');
        });
    </script>
    
@endsection