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


<form action="{{ route('soal.answer.store', $categori) }}" method="POST"
    class="learning flex flex-col gap-[50px] items-center mt-[50px] w-full pb-[30px]">
    @csrf

    @forelse  ($categori->questions as $question)
        <h1 class="w-[821px] font-extrabold text-[46px] leading-[69px] text-center">
            <span class="text-[#2B82FE]">{{ $loop->iteration }}</span>
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

    {{-- Sembunyikan tombol submit jika tidak ada soal --}}
    @if ($categori->questions->isNotEmpty())
        <button type="submit"
            class="w-fit p-[14px_40px] bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center align-middle">
            Submit
        </button>
    @endif
</form>


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
