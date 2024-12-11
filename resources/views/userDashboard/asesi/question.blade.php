
<script src="https://cdn.tailwindcss.com"></script>
<form action="" method="POST" class="learning flex flex-col gap-[50px] items-center mt-[50px] w-full pb-[30px]">
    @csrf
    <h1 class="w-[821px] font-extrabold text-[46px] leading-[69px] text-center">
        hallo
    </h1>
    <div class="flex flex-col gap-[30px] max-w-[750px] w-full">

            <label for=""
                class="group flex items-center justify-between rounded-full w-full border border-[#EEEEEE] p-[18px_20px] gap-[14px] transition-all duration-300 has-[:checked]:border-2 has-[:checked]:border-[#0A090B]">
                <div class="flex items-center gap-[14px]">
                    <img src="{{ asset('assets') }}/images/icons/arrow-circle-right.svg" alt="icon">
                    <span class="font-semibold text-xl leading-[30px]">jawaban</span>
                </div>
                <div class="hidden group-has-[:checked]:block">
                    <img src="{{ asset('assets') }}/images/icons/tick-circle.svg" alt="icon">
                </div>
                <input type="radio" name="answer_id" id="id" value="id"
                    class="hidden">
            </label>
    </div>
    <button type="submit"
        class="w-fit p-[14px_40px] bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center align-middle">Save
        & Next Question</button>
</form>
