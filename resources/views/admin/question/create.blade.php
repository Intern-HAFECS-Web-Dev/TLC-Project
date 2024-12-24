@extends('dashboard.adminDashboard')

@section('content')
    <div class="p-4 mt-8">
        <div class="flex items-center justify-between w-full">
            <a href="{{ url()->previous() }}"
                class="px-3 pt-2 text-white font-semibold bg-gray-500 rounded shadow hover:bg-gray-600">
                <i class='bx bx-arrow-back bx-sm'></i>
            </a>
            <h1 class="text-3xl mt-2 font-bold text-gray-800 mx-auto">Category</h1>
        </div>

        <main class="mx-auto border-2 p-3 mt-4 border-gray-400 mb-10 rounded-md">
            <div class="bg-white">
                {{-- <hr class="w-full py-5 mx-auto bg-blue-700 border-black"> --}}
                <div class="flex flex-col items-center my-3">

                    @if ($errors->any())
                        <div class="">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.categori.questions.store', $categori) }}" method="POST" id="add-question"
                        class="flex flex-col gap-5">
                        @csrf
                        <h2 class="text-2xl font-bold">Add New Question</h2>
                        <div class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Question</p>
                            {{-- <input type="text" name="category_id"  value="{{$categori}}" id=""> --}}
                            <div
                                class="flex items-center w-[500px] gap-x-2 h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] focus-within:border-1 focus-within:border-[#0A090B]">
                                <span class="mr-[14px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                    <i class='bx bx-notepad bx-sm bx-tada'></i>
                                </span>
                                <input type="text"
                                    class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full focus:outline-none focus:ring-0 focus:border-gray-400 rounded-md"
                                    placeholder="Write the question" name="question" value="{{ old('question') }}">
                            </div>
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Answers</p>
                            @foreach (range('A', 'D') as $i => $letter)
                                <div class="flex items-center gap-4">
                                    <div
                                        class="flex items-center w-[500px] h-[52px] p-[14px_16px] gap-x-2 rounded-full border border-[#cfcece] focus-within:border-2 focus-within:border-[#0A090B]">
                                        <span class="font-semibold text-lg w-[30px] text-center">{{ $letter }}</span>
                                        <input type="text"
                                            class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full focus:outline-none focus:ring-0 focus:border-gray-400 rounded-md"
                                            placeholder="Write answer option {{ $letter }}" name="answer[]"
                                            value="{{ old('answer.' . $i) }}">
                                    </div>
                                    <label class="font-semibold flex items-center gap-[10px]">
                                        <input type="radio" name="correct_answer" value="{{ $i }}"
                                            class="w-[24px] h-[24px] appearance-none checked:border-[3px] checked:border-solid checked:border-white rounded-full checked:bg-[#2B82FE] ring ring-[#EEEEEE]" />
                                        Correct
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit"
                            class="w-[500px] h-[52px] p-[14px_20px] bg-[#2B82FE] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">
                            Save Question
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
