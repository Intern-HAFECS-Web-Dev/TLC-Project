<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $categori)
    {
        $questions = $categori->questions()->get();

        // return view('admin.question.index', compact('categori'))->with('title', 'Question');

        return view('admin.question.index', compact('categori', 'questions'))->with('title', 'Question');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $categori)
    {
        return view('admin.question.create', compact('categori'))->with('title', 'Question');
    }

    public function store(Request $request, Category $categori)
    {
        // Validate the request
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|array',
            'answer.*' => 'required|string|max:255',
            'correct_answer' => 'required|integer',
        ]);

        DB::beginTransaction();

        try {
            // Create the question
            $question = $categori->questions()->create([
                'question' => $request->question,
            ]);

            // Loop answers from request perulangan di view form
            foreach ($request->answer as $index => $answerText) {
                $isCorrect = ($request->correct_answer == $index);
                $question->answers()->create([
                    'answer' => $answerText,
                    'is_correct' => $isCorrect,
                ]);
            }

            DB::commit();

            // return "ok";
            return redirect()->route('categori.questions.index', $categori)->with('title', 'Question');

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to create question: ' . $e->getMessage()], 500); // Return error response
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
