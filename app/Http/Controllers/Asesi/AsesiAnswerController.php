<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
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
        $answers = $request->input('answers');
    
        foreach ($answers as $questionId => $answerId) {
            UserAnswer::create([
                'question_id' => $questionId,
                'user_id' => auth()->user()->id,
                'answer' => $answerId,
            ]);
        }

        // return "ok";
    
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
