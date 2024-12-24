<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AsesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Category $categori )
    // {
    //     $questions = $categori->questions()->get();
    //     return view('userDashboard.asesi.question', compact('categori', 'questions'))->with('title', 'Question');
    // }


    public function index(Category $categori)
    {
        $user = Auth::user();
        $questions = $categori->questions()->with(['answers', 'userAnswers' => function ($query) use ($user) {
            $query->where('user_id', $user->id); // Ambil jawaban pengguna untuk pertanyaan ini
        }])->get();

        // return  $questions;

        // Filter pertanyaan yang belum dijawab
        $unansweredQuestions = $questions->filter(function ($question) {
            return $question->userAnswers->isEmpty();
        });

        $unansweredQuestion = $unansweredQuestions->first();
        return view('userDashboard.asesi.question', compact('categori', 'unansweredQuestion'))->with('title', 'Question');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
