<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
use App\Models\AnswerQuestion;
use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class AsesiAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // public function store(Request $request)
    // {
    //     // Validate the incoming request
    //     $request->validate([
    //         'answers' => 'required|array',
    //         'answers.*' => 'required|integer',
    //     ]);

    //     $answers = $request->input('answers');

    //     foreach ($answers as $questionId => $answerId) {
    //         $answer = AnswerQuestion::find($answerId);
    //         if ($answer) {
    //             $isCorrect = $answer->is_correct ? 'correct' : 'wrong';

    //             UserAnswer::create([
    //                 'question_id' => $questionId,
    //                 'user_id' => auth()->user()->id,
    //                 'answer' => $isCorrect,
    //             ]);
    //         }
    //     }
    //     return redirect()->route('kategoriLevel.index')
    //         ->with('success', 'All answers have been submitted successfully!');
    //     // return 'ok';
    //     // return redirect()->back();
    // }


    public function store(Request $request)
{
    try {
        // Validate the incoming request
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|integer',
        ]);

        $answers = $request->input('answers');
        $userId = auth()->user()->id;

        foreach ($answers as $questionId => $answerId) {
            // Periksa apakah user sudah menjawab soal ini
            $existingAnswer = UserAnswer::where('question_id', $questionId)
                                        ->where('user_id', $userId)
                                        ->first();

            if ($existingAnswer) {
                // Jika sudah menjawab, lempar Exception
                throw new \Exception("Anda sudah menjawab soal ini sebelumnya.");
            }

            // Temukan jawaban yang dipilih
            $answer = AnswerQuestion::find($answerId);

            if ($answer) {
                $isCorrect = $answer->is_correct ? 'correct' : 'wrong';

                // Simpan jawaban ke database
                UserAnswer::create([
                    'question_id' => $questionId,
                    'user_id' => $userId,
                    'answer' => $isCorrect,
                ]);
            }
        }

        // Redirect jika semua berhasil
        return redirect()->route('kategoriLevel.index')
            ->with('success', 'All answers have been submitted successfully!');
    } catch (\Exception $e) {
        // Tangkap error dan kembalikan dengan pesan
        return redirect()->back()->with('error', $e->getMessage());
    }
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
