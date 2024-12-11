<script src="https://cdn.tailwindcss.com"></script>
<form action="{{ route('soal.answer.store') }}" method="POST" class="learning flex flex-col gap-[50px] items-center mt-[50px] w-full pb-[30px]">
    @csrf

    @foreach ($questions as $question)
        <h1 class="w-[821px] font-extrabold text-[46px] leading-[69px] text-center">
            <span class="text-[#2B82FE]">{{ $loop->iteration }}</span>
            {{ $question->question }}
        </h1>
        <div class="flex flex-col gap-[30px] max-w-[750px] w-full">
            @foreach ($question->answers as $answer)
                <label for="{{ $answer->id }}" class="group flex items-center justify-between rounded-full w-full border border-[#EEEEEE] p-[18px_20px] gap-[14px] transition-all duration-300 has-[:checked]:border-2 has-[:checked]:border-[#0A090B]">
                    <div class="flex items-center gap-[14px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                        <span class="font-semibold text-xl leading-[30px]">{{ $answer->answer }}</span>
                    </div>
                    <input type="radio" name="answers[{{ $question->id }}]" id="{{ $answer->id }}" value="{{ $answer->id }}" class="hidden">
                </label>
            @endforeach
        </div>
    @endforeach

    <button type="submit" class="w-fit p-[14px_40px] bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center align-middle">
        Save & Next Question
    </button>
</form>
