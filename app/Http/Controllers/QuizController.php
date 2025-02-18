<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizAnswer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function submitQuiz(Request $request, $surah_id)
    {
        $answers = $request->input('answers', []);
        $score = 0;
        $totalQuestions = count($answers);

        foreach ($answers as $question_id => $selected_option) {
            $question = Question::find($question_id);
            $is_correct = ($question->correct_option === $selected_option);

            QuizAnswer::create([
                'user_id' => Auth::id(),
                'question_id' => $question_id,
                'selected_option' => $selected_option,
                'is_correct' => $is_correct
            ]);

            if ($is_correct) {
                $score++;
            }
        }

        return redirect()->route('quiz.result', ['score' => $score, 'total' => $totalQuestions]);
    }

    public function showResult($score, $total)
    {
        return view('quiz.result', compact('score', 'total'));
    }
}
