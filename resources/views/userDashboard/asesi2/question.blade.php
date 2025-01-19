<script src="https://cdn.tailwindcss.com"></script>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


{{-- <form action="{{ route('soal.answer.store', $categori) }}" method="POST"
    class="learning flex flex-col gap-[50px] items-center mt-[50px] w-full pb-[30px]">
    @csrf

    @forelse  ($categori->questions as $question)
        <h1 class="w-[821px] font-extrabold text-[46px] leading-[69px] text-center">
            <span class="text-[#2B82FE]">Soal {{ $loop->iteration }}.</span>
            {{ $question->question }}
        </h1>
        <div class="flex flex-col gap-[30px] max-w-[750px] w-full">
            @foreach ($question->answers as $answer)
                <label for="{{ $answer->id }}"
                    class="group flex items-center justify-between rounded-full w-full border border-[#EEEEEE] p-[18px_20px] gap-[14px] transition-all duration-300 has-[:checked]:border-2 has-[:checked]:border-[#0A090B]">
                    <div class="flex items-center gap-[14px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                        <span class="font-semibold text-xl leading-[30px]">{{ $answer->answer }}</span>
                    </div>
                    <input type="radio" name="answers[{{ $question->id }}]" id="{{ $answer->id }}"
                        value="{{ $answer->id }}" class="hidden" aria-label="Select answer {{ $answer->answer }}">
                </label>
            @endforeach
        </div>
    @empty
        <p>Tidak ada soal</p>
    @endforelse

    @if ($categori->questions->isNotEmpty())
        <button type="submit"
            class="w-fit p-[14px_40px] bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center align-middle">
            Submit
        </button>
    @endif
</form> --}}
<div class="bg-[#F6F8FD]">
    <form action="{{ route('soal.answer.store', $categori) }}" method="POST"
        class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8 min-h-screen">
        @csrf

        <div class="space-y-16">
            @forelse ($categori->questions as $question)
                <div class="bg-white rounded-2xl shadow p-8 transition-all duration-300">
                    <span class="bg-[#0C548C] text-white p-0 w-full text-xl sm:text-4xl font-bold px-6 py-2 rounded-lg inline-block text-center">SOAL {{ $loop->iteration }}</span>
                    <h1 class="text-center mb-8">
                        <p class="mt-4 text-2xl sm:text-3xl font-semibold text-gray-800">{{ $question->question }}</p>
                    </h1>

                    <div class="space-y-4 mt-8">
                        @foreach ($question->answers as $answer)
                            <label for="{{ $answer->id }}"
                                class="block relative cursor-pointer group">
                                <input type="radio" name="answers[{{ $question->id }}]"
                                    id="{{ $answer->id }}" value="{{ $answer->id }}"
                                    class="peer hidden" aria-label="Select answer {{ $answer->answer }}">

                                <div class="p-6 rounded-xl border transition-all duration-200
                                    bg-white hover:bg-gray-50
                                    peer-checked:border-[#2B82FE] peer-checked:bg-blue-50
                                    flex items-center justify-between gap-4">

                                    <div class="flex items-center gap-4">
                                        <div class="flex-shrink-0 w-6 h-6 rounded-full border
                                            group-hover:border-gray-400
                                            peer-checked:border-[#2B82FE] peer-checked:bg-[#2B82FE]
                                            flex items-center justify-center">
                                            <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <span class="text-lg font-medium text-gray-700 group-hover:text-gray-900">
                                            {{ $answer->answer }}
                                        </span>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="text-center text-gray-500">
                    <p class="text-xl">Tidak ada soal tersedia</p>
                </div>
            @endforelse
        </div>

        @if ($categori->questions->isNotEmpty())
            <div class="mt-12 text-center">
                <button type="submit"
                    class="inline-flex items-center px-8 py-4 bg-[#2B82FE]
                        text-white font-bold text-lg rounded-full shadow
                        transition-all duration-300
                        hover:bg-[#2373e7]
                        active:transform active:scale-95">
                    <span>Kirim Jawaban</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif
    </form>
</div>

{{-- <form action="{{ route('soal.answer.store', $categori) }}" method="POST"
    class="learning flex flex-col gap-12 items-center mt-12 w-full pb-8">
    @csrf

    @forelse  ($categori->questions as $question)
        <!-- Judul Soal -->
        <h1 class="w-full max-w-3xl font-extrabold text-3xl md:text-4xl leading-tight text-center">
            <span class="text-blue-500">Soal {{ $loop->iteration }}.</span>
            {{ $question->question }}
        </h1>

        <!-- Jawaban Soal -->
        <div class="flex flex-col gap-6 max-w-2xl w-full">
            @foreach ($question->answers as $answer)
                <label for="{{ $answer->id }}"
                    class="group flex items-center justify-between rounded-full w-full border border-gray-300 p-4 gap-4 transition-all duration-300 hover:shadow-md focus-within:shadow-md focus-within:border-gray-700">
                    <div class="flex items-center gap-4">
                        <!-- Icon Jawaban -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-gray-500 group-hover:text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                        <!-- Teks Jawaban -->
                        <span class="font-semibold text-lg leading-6 text-gray-800 group-hover:text-gray-900">
                            {{ $answer->answer }}
                        </span>
                    </div>
                    <!-- Input Radio -->
                    <input type="radio" name="answers[{{ $question->id }}]" id="{{ $answer->id }}"
                        value="{{ $answer->id }}" class="hidden" aria-label="Select answer {{ $answer->answer }}">
                </label>
            @endforeach
        </div>
    @empty
        <!-- Jika Tidak Ada Soal -->
        <p class="text-gray-500 text-lg">Tidak ada soal</p>
    @endforelse

    <!-- Tombol Submit -->
    @if ($categori->questions->isNotEmpty())
        <button type="submit"
            class="w-auto px-8 py-4 bg-indigo-600 text-white font-bold text-base rounded-full transition-all duration-300 hover:bg-indigo-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Submit
        </button>
    @endif
</form> --}}



<script>
    // Function to load answers from localStorage on page load
    document.addEventListener("DOMContentLoaded", function() {
        const savedAnswers = JSON.parse(localStorage.getItem("answers")) || {};

        // Loop through saved answers and set radio buttons
        for (const [questionId, answerId] of Object.entries(savedAnswers)) {
            const radioInput = document.getElementById(answerId);
            if (radioInput) {
                radioInput.checked = true;
            }
        }
    });

    // Listen for radio button changes and save to localStorage
    document.querySelectorAll('input[type="radio"]').forEach((radio) => {
        radio.addEventListener("change", function() {
            const questionId = this.name.match(/\d+/)[0]; // Extract question ID
            const answerId = this.id;

            // Retrieve or initialize saved answers
            let savedAnswers = JSON.parse(localStorage.getItem("answers")) || {};
            savedAnswers[questionId] = answerId;

            // Save updated answers to localStorage
            localStorage.setItem("answers", JSON.stringify(savedAnswers));
        });
    });

    // Clear localStorage on form submission (optional)
    document.querySelector("form").addEventListener("submit", function() {
        localStorage.removeItem("answers");
    });
</script>

<script>
    document.querySelector("form").addEventListener("submit", function(event) {
        const questions = document.querySelectorAll('input[type="radio"]');
        const unansweredQuestions = new Set();

        questions.forEach((radio) => {
            const questionId = radio.name;
            const isChecked = document.querySelector(`input[name="${questionId}"]:checked`);
            if (!isChecked) {
                unansweredQuestions.add(questionId);
            }
        });

        if (unansweredQuestions.size > 0) {
            event.preventDefault(); // Prevent form submission
            alert("Please answer all questions before submitting.");
        }
    });
</script>
