<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Surah; // تأكد من استيراد النموذج بشكل صحيح
use App\Models\Result;


class QuestionController extends Controller
{
       // عرض الأسئلة الخاصة بالسورة
       public function showQuestions($id)
       {
           $surah = Surah::findOrFail($id);
       $questions = Question::where('surah_id', $id)->paginate(5); // 5 أسئلة لكل صفحة
       return view('surahs.questions', [
           'surah' => $surah,
           'questions' => $questions
       ]);
       }
   

    public function submitAnswers(Request $request, $surahId)
    {
        // جلب السورة
        $surah = Surah::findOrFail($surahId);
    
        // جلب الأسئلة بناءً على الإجابات المقدمة
        $questions = Question::whereIn('id', array_keys($request->answers))->get();
    
        // حساب النتيجة
        $score = 0;
    
        foreach ($questions as $question) {
            $userAnswer = $request->answers[$question->id] ?? null;
            if ($userAnswer === $question->correct_answer) {
                $score++;
            }
        }
    
        // تخزين النتيجة في قاعدة البيانات
        $result = Result::create([
            'user_id' => auth()->id(), // ID المستخدم الحالي
            'surah_id' => $surah->id,
            'score' => $score,
            'total_questions' => $questions->count(),
        ]);
    
        // عرض صفحة النتيجة
        return view('surahs.result', [
            'surah' => $surah,
            'score' => $score,
            'total' => $questions->count(),
        ]);
    }
    public function create($surahId)
    {
        $surah = Surah::findOrFail($surahId);
        return view('questions.create', compact('surah'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'surah_id' => 'required|exists:surahs,id',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        \App\Models\Question::create($validated);

        return redirect()->route('surahs.questions', $request->surah_id)->with('success', 'تمت إضافة السؤال بنجاح!');
    }

}