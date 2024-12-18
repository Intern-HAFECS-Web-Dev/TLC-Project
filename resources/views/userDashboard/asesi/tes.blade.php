<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title></title>
</head>

<body>
    <div class="flex mt-14">
        <form class="flex flex-col items-center w-full pb-5 ">
            <div class="border border-black w-[800px]">
                <h1 class="font-bold text-2xl leading-snug text-center mb-3">
                    Apa Huruf Pertama Dalam Abjad?
                </h1>
                <div class="flex mx-auto flex-col gap-[30px] max-w-[750px] w-full px-3">
                    <div class="flex items-center gap-4 border border-red-500 px-3 py-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <h2 class="font-semibold text-base leading-snug">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Voluptatem nesciunt vero assumenda pariatur iste at sint perferendis
                            voluptatum inventore quas!</h2>
                    </div>
                    <div class="flex items-center gap-4 border border-red-500 px-3 py-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <h2 class="font-semibold text-base leading-snug">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Voluptatem nesciunt vero assumenda pariatur iste at sint perferendis
                            voluptatum inventore quas!</h2>
                    </div>
                    <div class="flex items-center gap-4 border border-red-500 px-3 py-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <h2 class="font-semibold text-base leading-snug">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Voluptatem nesciunt vero assumenda pariatur iste at sint perferendis
                            voluptatum inventore quas!</h2>
                    </div>
                    <div class="flex items-center gap-4 border border-red-500 px-3 py-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <h2 class="font-semibold text-base leading-snug">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Voluptatem nesciunt vero assumenda pariatur iste at sint perferendis
                            voluptatum inventore quas!</h2>
                    </div>

                </div>

                <div class="flex justify-center py-4 gap-3">
                    <button type="submit"
                        class="w-fit p-3 bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 text-center align-middle">
                        Soal Sebelumnya
                    </button>
                    <button type="submit"
                        class="w-fit p-3 bg-[#6436F1] rounded-full font-bold text-sm text-white transition-all duration-300 text-center align-middle">
                        Soal Selanjutnya
                    </button>
                </div>
            </div>
        </form>
        <div class="w-[400px] h-[350px] mr-3 bg-white shadow-lg relative p-4">
            <div class="flex flex-wrap gap-2">

                @for ($i = 1; $i <= 30; $i++)
                    <div class="w-10 h-10 flex items-center justify-center bg-gray-500 text-white font-bold">
                        {{ $i }}
                    </div>
                @endfor
            </div>

            <button type="button"
                class=" absolute bottom-4 right-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Finish
            </button>
        </div>


    </div>
</body>

</html>
