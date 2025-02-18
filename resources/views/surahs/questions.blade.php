@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap');
    body {
        font-family: 'Tajawal', sans-serif;
        background-color: #f8f9fa;
    }
    .custom-card {
        background: linear-gradient(to right, #ffffff, #f8f9fa);
        border-radius: 12px;
        padding: 20px;
        transition: 0.3s ease-in-out;
    }
    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 123, 255, 0.2);
    }
    .question-title {
        color: #007bff;
        font-weight: bold;
        font-size: 1.3em;
    }
    .list-group-item {
        border: none;
        background: #ffffff;
        padding: 12px;
        border-radius: 8px;
        font-size: 1.1em;
        transition: 0.3s ease-in-out;
    }
    .list-group-item:hover {
        background: #007bff;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transform: scale(1.02);
    }
</style>

<div class="container mt-5">
    <h2 class="text-center text-4xl font-bold mb-5 text-gray-800 dark:text-gray-100"
        style="font-family: 'Tajawal', sans-serif;" dir="rtl">
        📖 أسئلة عن سورة {{ $surah->name }}
    </h2>
    <form action="{{ route('questions.submit', $surah->id) }}" method="POST">
        @csrf
        <div class="row justify-content-center" dir="rtl">
            @foreach ($questions as $index => $question)
                <div class="col-md-10 mb-4">
                    <div class="custom-card shadow-sm">
                        <h5 class="mb-3 question-title">
                            ❓ {{ $index + 1 }}. {{ $question->question }}
                        </h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input type="radio" id="option_a_{{ $question->id }}"
                                    name="answers[{{ $question->id }}]" value="A">
                                <label for="option_a_{{ $question->id }}"><strong>➊</strong>
                                    {{ $question->option_a }}</label>
                            </li>
                            <li class="list-group-item">
                                <input type="radio" id="option_b_{{ $question->id }}"
                                    name="answers[{{ $question->id }}]" value="B">
                                <label for="option_b_{{ $question->id }}"><strong>➋</strong>
                                    {{ $question->option_b }}</label>
                            </li>
                            <li class="list-group-item">
                                <input type="radio" id="option_c_{{ $question->id }}"
                                    name="answers[{{ $question->id }}]" value="C">
                                <label for="option_c_{{ $question->id }}"><strong>➌</strong>
                                    {{ $question->option_c }}</label>
                            </li>
                            <li class="list-group-item">
                                <input type="radio" id="option_d_{{ $question->id }}"
                                    name="answers[{{ $question->id }}]" value="D">
                                <label for="option_d_{{ $question->id }}"><strong>➍</strong>
                                    {{ $question->option_d }}</label>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg">✅ إرسال الإجابات</button>
        </div>
    </form>
    <div class="text-center mt-4">
        <a href="{{ route('surahs.index') }}" class="btn btn-primary btn-lg">🔙 الرجوع إلى قائمة السور</a>
    </div>
    <div class="text-center mt-4">
    {{ $questions->links() }} <!-- عرض الروابط الخاصة بالصفحات -->
</div>
</div>
@endsection