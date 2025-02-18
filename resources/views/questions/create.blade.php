@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2 class="text-center text-3xl font-bold mb-5" style="font-family: 'Amiri', serif;">
        📝 إضافة أسئلة للسورة: {{ $surah->name }}
    </h2>
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <input type="hidden" name="surah_id" value="{{ $surah->id }}">
        <div class="mb-3">
            <label for="question" class="form-label">السؤال:</label>
            <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="option_a" class="form-label">الخيار أ:</label>
            <input type="text" class="form-control" id="option_a" name="option_a" required>
        </div>
        <div class="mb-3">
            <label for="option_b" class="form-label">الخيار ب:</label>
            <input type="text" class="form-control" id="option_b" name="option_b" required>
        </div>
        <div class="mb-3">
            <label for="option_c" class="form-label">الخيار ج:</label>
            <input type="text" class="form-control" id="option_c" name="option_c" required>
        </div>
        <div class="mb-3">
            <label for="option_d" class="form-label">الخيار د:</label>
            <input type="text" class="form-control" id="option_d" name="option_d" required>
        </div>
        <div class="mb-3">
            <label for="correct_answer" class="form-label">الإجابة الصحيحة:</label>
            <select class="form-select" id="correct_answer" name="correct_answer" required>
                <option value="A">أ</option>
                <option value="B">ب</option>
                <option value="C">ج</option>
                <option value="D">د</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">حفظ السؤال</button>
    </form>
</div>
@endsection