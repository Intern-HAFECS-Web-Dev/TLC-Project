@extends('dashboard.adminDashboard')

<p>gg</p>

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
                                <img src="{{ Storage::url($category->image_categori) }}" alt="Category Image"
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
                                    onclick="window.location.href='{{ route('admin.categori.questions.index', $category) }}';"
                                    class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                    show
                                    <i class="fas fa-eye ms-2"></i>
                                </button>

                                <button type="button"
                                onclick="window.location.href='{{ route('admin.categori.questions.index', $category) }}';"
                                class="pt-1.5 md:py-auto md:pt-2 w-24 text-birutua bg-white border border-biru hover:bg-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
                                show
                                <i class="fas fa-eye ms-2"></i>
                            </button>
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

    {{-- Pagination --}}
    <div class="mt-4">
        {{-- {{ $userProfile->links() }} --}}
    </div>

    {{-- Pop up Delete Asesi --}}
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin delete
                        all asesi? tindakan ini tidak dapat di kembalikan</h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        <a href="{{ route('admin.deleteAllUsers') }}">
                            Yes, Saya yakin
                        </a>
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- popOver Delete --}}
    <x-popover title="Delete All Users" id="popover-delete">
        <strong class="text-red-500">Warning!!</strong>
        <p>Tindakan Ini akan menghapus semua pengguna dari sistem.</p>
    </x-popover>

    {{-- popOver addUser --}}
    <x-popover title="Add Users" id="popover-addUser">
        <p>Tindakan Ini akan menambahkan users baru kedalam database.</p>
    </x-popover>

    {{-- popOver Export --}}
    <x-popover title="Export Asesi" id="popover-export">
        <p>Tindakan Ini akan membuat file excel dari data asesi.</p>
    </x-popover>

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
