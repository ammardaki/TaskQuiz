<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surah; // تأكد من استيراد النموذج بشكل صحيح

class HomeController extends Controller
{
    public function index()
    {
        // جلب السور من قاعدة البيانات
        $surahs = Surah::all();

        // إرجاع الـ View مع السور
        return view('home', compact('surahs'));
    }

      // عرض الأسئلة العشوائية عند اختيار سورة
      public function show(Surah $surah)
      {
          $questions = $surah->questions()->inRandomOrder()->take(5)->get();
          return view('surahs.questions', compact('surah', 'questions'));
      }

}
