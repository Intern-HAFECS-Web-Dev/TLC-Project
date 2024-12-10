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
                    <hr class="w-full py-5 mx-auto border-black">
                    <div class="col-span-5 px-5 mx-auto my-3">

                        @if ($errors->any())
                        <div class="">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <form action="{{ route('categori.questions.store', $categori) }}" method="POST" id="add-question" class="mx-[70px] mt-[30px] flex flex-col gap-5">
                            @csrf
                            <h2 class="text-2xl font-bold">Add New Question</h2>
                            <div class="flex flex-col gap-[10px]">
                                <p class="font-semibold">Question</p>
                                {{-- <input type="text" name="category_id"  value="{{$categori}}" id=""> --}}
                                <div
                                    class="flex items-center w-[500px] h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] focus-within:border-2 focus-within:border-[#0A090B]">
                                    <div class="mr-[14px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                        <img src="{{ asset('assets') }}/images/icons/note-text.svg"
                                            class="object-contain w-full h-full" alt="icon">
                                    </div>
                                    <input type="text"
                                        class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none"
                                        placeholder="Write the question" name="question">
                                </div>
                            </div>
                            <div class="flex flex-col gap-[10px]">
                                <p class="font-semibold">Answers</p>
                                @for ($i = 0; $i <= 3; $i++)
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="flex items-center w-[500px] h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] focus-within:border-2 focus-within:border-[#0A090B]">
                                            <div class="mr-[14px] w-6 h-6 flex items-center justify-center overflow-hidden">
                                                <img src="{{ asset('assets') }}/images/icons/edit.svg"
                                                    class="object-contain w-full h-full" alt="icon">
                                            </div>
                                            <input type="text"
                                                class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none"
                                                placeholder="Write better answer option" name="answer[]">
                                        </div>
                                        <label class="font-semibold flex items-center gap-[10px]"><input type="radio"
                                                name="correct_answer" value="{{ $i }}"
                                                class="w-[24px] h-[24px] appearance-none checked:border-[3px] checked:border-solid checked:border-white rounded-full checked:bg-[#2B82FE] ring ring-[#EEEEEE]" />
                                            Correct
                                        </label>
                                    </div>
                                @endfor

                            </div>
                            <button type="submit"
                                class="w-[500px] h-[52px] p-[14px_20px] bg-[#36f1f1] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">
                                Save Question
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
