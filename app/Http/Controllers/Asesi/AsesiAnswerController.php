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

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|integer', // Assuming answer IDs are integers
        ]);

        $answers = $request->input('answers');

        foreach ($answers as $questionId => $answerId) {
            // Retrieve the answer to check if it's correct
            $answer = AnswerQuestion::find($answerId);

            // Check if the answer exists and is correct
            if ($answer) {
                $isCorrect = $answer->is_correct ? 'correct' : 'wrong';

                // Store the user's answer
                UserAnswer::create([
                    'question_id' => $questionId,
                    'user_id' => auth()->user()->id,
                    'answer' => $isCorrect,
                ]);
            }
        }
        return "ok";

        return redirect()->route('kategoriLevel.index')
            ->with('success', 'All answers have been submitted successfully!');
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
