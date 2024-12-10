@section('content')
    <div class="p-4 mt-8">
        <div class="flex justify-between">
            <div class="flex">
                <h1 class="text-3xl font-bold text-gray-800">Category</h1>
            </div>
        </div>

        <main class="container mx-auto mb-10">
            <div class="grid grid-cols-5 px-3 mt-10">
                <div class="col-span-5 px-3 bg-white shadow-xl">

                    <!-- Tombol untuk membuka modal -->
                    <button id="openModal" class="px-4 py-2 text-white bg-blue-500 rounded shadow hover:bg-blue-600">
                        Add Category
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
                                <form action="{{ route('categori.store') }}" method="POST" enctype="multipart/form-data">
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

                    <hr class="w-full py-5 mx-auto border-black">

                    @forelse ($categoris as $category)
                        <div class="col-span-5 px-5 mx-auto my-3">
                            <a href="#"
                                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full lg:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full h-auto p-2 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="images/sertif.png" alt="">

                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5
                                        class="mb-2 text-lg font-bold tracking-tight text-gray-900 lg:text-xl dark:text-white">
                                        {{ $category->name }}</h5>
                                    {{-- <button type="button" onclick="window.location.href='{{ route('kategoriLevel.index') }}';" --}}
                                    <button type="button"
                                        onclick="window.location.href='{{ route('categori.questions.index', $category) }}';"
                                        class="w-20 mt-3 text-birutua bg-white hover:bg-biru border border-biru hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        show
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p>Tidak ada kategori</p>
                    @endforelse
                </div>
            </div>
        </main>
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
