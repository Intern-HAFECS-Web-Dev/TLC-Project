@extends('dashboard.adminDashboard')

@section('content')
    <div class="p-4 mt-8">
        <h1 class="text-3xl font-bold text-gray-800">Category</h1>

        <main class="mb-10 px-3 mt-4 border-2 rounded-md border-gray-400 bg-white">
            <div class="pb-5">
                <a href="{{ route('admin.categori.questions.create', $categori) }}"
                    class="px-4 py-2 text-white font-semibold bg-blue-500 rounded shadow hover:bg-blue-600">
                    Create Question
                </a>
            </div>

            @forelse ($questions as $index => $question) 
                <div class="p-3 mx-auto my-3 border border-slate-500 rounded-md">
                    <div class="flex flex-col items-center border border-gray-400 rounded-lg w-full shadow md:flex-row          md:max-w-full lg:max-w-full hover:bg-gray-100">
                        <div class="flex justify-between w-full p-4 leading-normal">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 lg:text-xl dark:text-white">
                                {{ $index + 1 }}. {{ $question->question }}
                            </h5>
                
                            <div class="flex space-x-4 ml-auto">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown-{{ $question->id }}" class="text-white bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">
                                    Manage
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                
                                <div id="dropdown-{{ $question->id }}" class="z-10 hidden bg-slate-700 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="{{ route('admin.categori.questions.edit', [$categori, $question]) }}" class="block px-4 py-2  text-white font-semibold ">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.categori.questions.destroy', [$categori, $question]) }}" method="POST" id="delete-form-{{ $question->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="confirmDelete({{ $question->id }})" class="block px-4 py-2 text-sm text-white font-semibold ">
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($question->answers as $index => $answer)
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 lg:text-xl dark:text-white">
                                <span class="font-bold text-lg">{{ chr(65 + $index) }}. </span>{{ $answer->answer }}
                                @if ($answer->is_correct)
                                    <span class="text-green-500">(Benar)</span>
                                @endif
                            </h5>
                        </div>
                    @endforeach
                </div>
            @empty
                <p>Tidak ada pertanyaan</p>
            @endforelse

        </main>
    </div>

    <script>
        function confirmDelete(questionId) {
            if (confirm("Are you sure you want to delete this question?")) {
                document.getElementById('delete-form-' + questionId).submit();
            }
        }
    </script>
@endsection
