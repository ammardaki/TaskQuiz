@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-4xl font-bold mb-5" style="font-family: 'Amiri', serif;">
        📖 تفاصيل السورة
    </h2>

    <div class="card shadow-sm p-4">
        <p class="fw-bold">اسم السورة:</p>
        <p>{{ $surah->name }}</p>

        <!-- عرض الأسئلة المرتبطة بهذه السورة -->
        @if ($surah->questions->isNotEmpty())
            <h4 class="mt-4 fw-bold">📖 الأسئلة المرتبطة:</h4>
            <ul class="list-group">
                @foreach ($surah->questions as $question)
                    <li class="list-group-item">{{ $question->question }}</li>
                @endforeach
            </ul>
        @else
            <p class="mt-3 text-muted">لا توجد أسئلة مرتبطة بهذه السورة.</p>
        @endif
    </div>

    <a href="{{ route('surahs.index') }}" class="btn btn-secondary mt-3">🔙 الرجوع</a>
</div>
@endsection