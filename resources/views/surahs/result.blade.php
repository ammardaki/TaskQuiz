@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-4xl font-bold mb-12 text-gray-800 dark:text-gray-100" style="font-family: 'Amiri', serif;">
        🎉 نتيجة الإجابة على أسئلة سورة {{ $surah->name }}
    </h2>

    <div class="card border-0 rounded-lg shadow-sm p-4 bg-white text-center">
        <p class="card-text fw-bold" style="font-size: 1.5rem; color: #2c3e50;">
            إجاباتك الصحيحة: {{ $score }} / {{ $total }}
        </p>
        <p class="card-text text-muted" style="font-size: 1.2rem;">
            نسبة الإجابة الصحيحة: {{ round(($score / $total) * 100, 2) }}%
        </p>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('surahs.index') }}" class="btn btn-primary">🔙 الرجوع إلى قائمة السور</a>
    </div>
</div>
@endsection