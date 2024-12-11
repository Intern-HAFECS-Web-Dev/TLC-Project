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
            'correct_answer' => 'required|integer|in:0,1,2,3',
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
            return redirect()->route('admin.categori.questions.index', $categori)->with('title', 'Question');
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

    public function edit(Category $categori, Question $question)
    {
        $title = "Edit Question";
        $answers = $question->answers()->get();

        // return $answers;
        return view('admin.question.edit', compact('title', 'question', 'answers', 'categori'));
    }

    public function update(Request $request, Category $categori, Question $question)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|array',
            'answer.*' => 'required|string|max:255',
            'correct_answer' => 'required|integer',
        ]);

        DB::beginTransaction();

        try {
            $question->update([
                'question' => $request->question,
            ]);

            $question->answers()->delete();

            foreach ($request->answer as $index => $answerText) {
                $isCorrect = ($request->correct_answer == $index);
                $question->answers()->create([
                    'answer' => $answerText,
                    'is_correct' => $isCorrect,
                ]);
            }

            DB::commit();

            return redirect()->route('admin.categori.questions.index', $categori)->with('success', 'Question updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update question: ' . $e->getMessage()]);
        }
    }

    public function destroy(Category $categori, Question $question)
    {
        DB::beginTransaction();

        try {
            $question->answers()->delete();
            $question->delete();

            DB::commit();
            alert('success', 'Question deleted successfully!');
            return redirect()->route('admin.categori.questions.index', $categori)->with('success', 'Question deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to delete question: ' . $e->getMessage()]);
        }
    }
}