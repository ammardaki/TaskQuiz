<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Question;
use App\Models\Surah;


class ResultController extends Controller
{

    public function index()
    {
        // جلب نتائج المستخدم الحالي
        $results = Result::where('user_id', auth()->id())
                         ->with('surah')
                         ->latest()
                         ->paginate(10);
    
        return view('results.index', compact('results'));
    }

    // معالجة الإجابات وعرض النتيجة
    public function submitAnswers(Request $request, $id)
    {
        $surah = Surah::findOrFail($id);
        $questions = Question::whereIn('id', array_keys($request->answers))->get();

        $score = 0;

        foreach ($questions as $question) {
            if ($request->answers[$question->id] === $question->correct_answer) {
                $score++;
            }
        }

        return view('surahs.result', [
            'surah' => $surah,
            'score' => $score,
            'total' => $questions->count(),
        ]);
    }

}
