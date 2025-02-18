<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // أسئلة لسورة الفاتحة
            [
                'surah_id' => 1,
                'question' => 'ما هو اسم السورة التي تُسمى "أم الكتاب"؟',
                'option_a' => 'سورة البقرة',
                'option_b' => 'سورة الفاتحة',
                'option_c' => 'سورة آل عمران',
                'option_d' => 'سورة الأنفال',
                'correct_answer' => 'B'
            ],
            [
                'surah_id' => 1,
                'question' => 'كم عدد آيات سورة الفاتحة؟',
                'option_a' => '5 آيات',
                'option_b' => '7 آيات',
                'option_c' => '10 آيات',
                'option_d' => '12 آية',
                'correct_answer' => 'B'
            ],

            // أسئلة لسورة البقرة
            [
                'surah_id' => 2,
                'question' => 'ما هو الموضوع الرئيسي لسورة البقرة؟',
                'option_a' => 'التوحيد',
                'option_b' => 'التشريعات',
                'option_c' => 'قصص الأنبياء',
                'option_d' => 'كل ما سبق',
                'correct_answer' => 'D'
            ],
            [
                'surah_id' => 2,
                'question' => 'كم عدد آيات سورة البقرة؟',
                'option_a' => '286 آية',
                'option_b' => '200 آية',
                'option_c' => '150 آية',
                'option_d' => '300 آية',
                'correct_answer' => 'A'
            ],

            // أسئلة لسورة آل عمران
            [
                'surah_id' => 3,
                'question' => 'ما هو الاسم الذي يُطلق على سورة آل عمران؟',
                'option_a' => 'سورة النساء',
                'option_b' => 'سورة المائدة',
                'option_c' => 'سورة العائلة',
                'option_d' => 'سورة الإيمان',
                'correct_answer' => 'C'
            ],
            [
                'surah_id' => 3,
                'question' => 'كم عدد آيات سورة آل عمران؟',
                'option_a' => '100 آية',
                'option_b' => '200 آية',
                'option_c' => '150 آية',
                'option_d' => '190 آية',
                'correct_answer' => 'B'
            ],

            // أسئلة لسورة النساء
            [
                'surah_id' => 4,
                'question' => 'ما هو الموضوع الرئيسي لسورة النساء؟',
                'option_a' => 'حقوق المرأة',
                'option_b' => 'المواريث',
                'option_c' => 'الجهاد',
                'option_d' => 'كل ما سبق',
                'correct_answer' => 'D'
            ],
            [
                'surah_id' => 4,
                'question' => 'كم عدد آيات سورة النساء؟',
                'option_a' => '176 آية',
                'option_b' => '150 آية',
                'option_c' => '200 آية',
                'option_d' => '100 آية',
                'correct_answer' => 'A'
            ],

            // أسئلة لسورة المائدة
            [
                'surah_id' => 5,
                'question' => 'ما هو الموضوع الرئيسي لسورة المائدة؟',
                'option_a' => 'التشريعات الغذائية',
                'option_b' => 'الحج',
                'option_c' => 'الزكاة',
                'option_d' => 'كل ما سبق',
                'correct_answer' => 'A'
            ],
            [
                'surah_id' => 5,
                'question' => 'كم عدد آيات سورة المائدة؟',
                'option_a' => '120 آية',
                'option_b' => '150 آية',
                'option_c' => '100 آية',
                'option_d' => '160 آية',
                'correct_answer' => 'A'
            ],

            // يمكنك إضافة المزيد من الأسئلة لكل سور...
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}