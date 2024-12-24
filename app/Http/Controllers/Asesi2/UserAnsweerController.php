<?php

namespace App\Http\Controllers\Asesi2;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UserAnsweerController extends Controller
{
    public function index(Category $categori )
    {
        // $questions = $categori->questions()->get();

        // return $questions;
        return view('userDashboard.asesi2.question', compact('categori'))->with('title', 'Question');
    }
}
