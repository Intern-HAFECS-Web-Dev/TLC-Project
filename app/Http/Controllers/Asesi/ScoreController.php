<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function getAllCategoriesScores()
    {
        // Ambil semua kategori
        $categories = Category::all();

        // Array untuk menyimpan hasil nilai tiap kategori
        $results = [];
        $totalPassPercentage = 0; // Variabel untuk menyimpan total pass percentage

        foreach ($categories as $category) {
            // Ambil jawaban user berdasarkan kategori
            $userAnswers = UserAnswer::with('question')
                ->whereHas('question', function ($query) use ($category) {
                    $query->where('category_id', $category->id);
                })->where('user_id', auth()->user()->id)->get();

            // Hitung total pertanyaan untuk kategori ini
            $totalQuestions = Question::where('category_id', $category->id)->count();

            // Hitung jumlah jawaban benar
            $correctAnswersCount = $userAnswers->where('answer', 'correct')->count();

            // Hitung persentase kelulusan
            $passPercentage = $totalQuestions > 0 ? ($correctAnswersCount / $totalQuestions) * 100 : 0;

            // Tentukan status lulus atau tidak lulus
            $nilai = $passPercentage >= 70 ? 'Lulus' : 'Tidak Lulus';

            // Simpan hasil untuk kategori ini
            $results[] = [
                'category' => $category->name,
                'total_questions' => $totalQuestions,
                'correct_answers' => $correctAnswersCount,
                'pass_percentage' => $passPercentage,
                'nilai' => $nilai,
            ];

            // Tambahkan pass percentage ke total
            $totalPassPercentage += $passPercentage;
        }

        // Hitung rata-rata pass percentage
        $averagePassPercentage = count($categories) > 0 ? $totalPassPercentage / count($categories) : 0;

        // Tambahkan rata-rata ke hasil
        $results['average_pass_percentage'] = $averagePassPercentage;

        return $results;
    }
}
