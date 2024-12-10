@extends('dashboard.adminDashboard')

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
                    <div class="pb-5">
                        <a href="{{ route('admin.categori.questions.create', $categori) }}"
                            class="px-4 py-2 text-white bg-blue-500 rounded shadow hover:bg-blue-600">
                            create question
                        </a>
                    </div>
                    <hr class="w-full py-5 mx-auto border-black">

                    @forelse ($questions as $question)
                        <div class="col-span-5 px-5 mx-auto my-3">
                            <div
                                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full lg:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5
                                        class="mb-2 text-lg font-bold tracking-tight text-gray-900 lg:text-xl dark:text-white">
                                        {{ $question->question }}</h5>
                                </div>
                            </div>

                            @foreach ($question->answers as $answer)
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5
                                        class="mb-2 text-lg font-bold tracking-tight text-gray-900 lg:text-xl dark:text-white">
                                        {{ $answer->answer }} @if ($answer->is_correct == 1)
                                            <span class="text-green-500">Benar</span>
                                        @endif
                                    </h5>
                                </div>

                            @endforeach
                        </div>
                    @empty

                    <p>Tidak ada pertanyaan</p>
                    @endforelse
                </div>
            </div>
        </main>
    </div>
@endsection
