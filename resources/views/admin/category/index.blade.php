@extends('dashboard.adminDashboard')
@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mt-4 mb-5" aria-label="Breadcrumb">
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
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"></h1>
            </div>
            <div class="sm:flex">
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">

                    <!-- Tombol untuk membuka modal -->
                    <button id="openModal"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add Kategori Soal
                    </button>

                    <!-- Modal -->
                    <div id="modal"
                        class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
                        <div class="w-1/3 bg-white rounded-lg shadow-lg">
                            <!-- Header Modal -->
                            <div class="flex items-center justify-between p-4 border-b">
                                <h2 class="text-xl font-bold">Add Category</h2>
                                <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
                            </div>
                            <!-- Isi Modal -->
                            <div class="p-4">
                                <form action="{{ route('admin.categori.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label for="name" class="block text-sm font-medium text-gray-700">Category
                                        Name</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full p-2 mt-2 border rounded" placeholder="Enter category name">

                                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                    <input type="file" id="image" name="image_categori"
                                        class="w-full p-2 mt-2 border rounded" placeholder="input image">
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
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <div class="gap-1 px-4 py-8 lg:flex lg:px-auto lg:flex-wrap lg:justify-center gap-x-8 gap-y-6">
                        @forelse ($categoris as $category)
                            <div
                                class="mb-5 lg:mb-0 bg-white w-full h-[164px] md:h-[197px] shadow-md rounded-lg overflow-hidden lg:w-[350px] lg:h-[236px]">
                                {{-- <img src="{{ Storage::url($category->image_categori) }}" alt="Category Image" --}}
                                <img src="{{ asset('/storage/' . $category->image_categori) }}" alt="Category Image"

                                    class="h-28 md:h-36 w-full lg:h-[177px] object-cover">
                                <div class="flex justify-between px-4 pt-2 pb-0 lg:py-2">
                                    <h3
                                        class="pt-1.5 md:pt-2 text-sm font-semibold md:text-base md:font-semibold lg:text-lg lg:font-bold ">
                                        {{ $category->name }}</h3>

                                    <button type="button"
                                        onclick="window.location.href='{{ route('admin.categori.questions.index', $category) }}';"
                                        class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                        show
                                        <i class="fas fa-eye ms-2"></i>
                                    </button>

                                    <button type="button"
                                        onclick="window.location.href='{{ route('admin.categori.edit', $category) }}';"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-biru hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        edit
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>

                                    <form action="{{ route('admin.categori.destroy', $category) }}" method="post">
                                        @csrf

                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            delete
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
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
            modal.classList.remove('hidden');
            body.classList.add('modal-open');
        });

        // Fungsi untuk menutup modal
        const close = () => {
            modal.classList.add('hidden');
            body.classList.remove('modal-open');
        };

        closeModal.addEventListener('click', close);

        // Tutup modal saat klik di luar area modal
        modal.addEventListener('click', (e) => {
            if (e.target === modal) close();
        });
    </script>
@endsection
