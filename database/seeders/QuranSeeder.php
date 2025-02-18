<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surah;
use App\Models\Question;

class QuranSeeder extends Seeder
{
    /**
     * تشغيل الـ Seeder لإدخال بيانات تجريبية.
     */
    public function run()
    {
        // إدخال السور
        $surah1 = Surah::create(['name' => 'الفاتحة']);
        $surah2 = Surah::create(['name' => 'البقرة']);
        $surah3 = Surah::create(['name' => 'آل عمران']);

        // إدخال الأسئلة الخاصة بسورة الفاتحة
        Question::create([
            'surah_id' => $surah1->id,
            'question' => 'ما عدد آيات سورة الفاتحة؟',
            'option_a' => '5',
            'option_b' => '6',
            'option_c' => '7',
            'option_d' => '8',
            'correct_answer' => '7'
        ]);

        Question::create([
            'surah_id' => $surah1->id,
            'question' => 'ما اسم آخر آية في سورة الفاتحة؟',
            'option_a' => 'المغضوب عليهم',
            'option_b' => 'ولا الضالين',
            'option_c' => 'إياك نعبد وإياك نستعين',
            'option_d' => 'اهدنا الصراط المستقيم',
            'correct_answer' => 'ولا الضالين'
        ]);

        // إدخال أسئلة خاصة بسورة البقرة
        Question::create([
            'surah_id' => $surah2->id,
            'question' => 'كم عدد آيات سورة البقرة؟',
            'option_a' => '286',
            'option_b' => '200',
            'option_c' => '114',
            'option_d' => '250',
            'correct_answer' => '286'
        ]);

        Question::create([
            'surah_id' => $surah2->id,
            'question' => 'ما هي أول آية في سورة البقرة؟',
            'option_a' => 'ألم',
            'option_b' => 'ذلك الكتاب لا ريب فيه',
            'option_c' => 'الحمد لله رب العالمين',
            'option_d' => 'إياك نعبد وإياك نستعين',
            'correct_answer' => 'ألم'
        ]);

        // إدخال أسئلة خاصة بسورة آل عمران
        Question::create([
            'surah_id' => $surah3->id,
            'question' => 'ما معنى "آل عمران"؟',
            'option_a' => 'أهل عمران',
            'option_b' => 'بيت عمران',
            'option_c' => 'أبناء عمران',
            'option_d' => 'ذرية عمران',
            'correct_answer' => 'أهل عمران'
        ]);

        Question::create([
            'surah_id' => $surah3->id,
            'question' => 'ما الآية التي تبين وحدانية الله في سورة آل عمران؟',
            'option_a' => 'شهد الله أنه لا إله إلا هو',
            'option_b' => 'الله لا إله إلا هو الحي القيوم',
            'option_c' => 'وإلهكم إله واحد لا إله إلا هو',
            'option_d' => 'قل هو الله أحد',
            'correct_answer' => 'شهد الله أنه لا إله إلا هو'
        ]);
    }
}
