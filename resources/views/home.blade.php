@extends('layouts.app')

@section('content')
<div class="container mt-10">
    <h2 class="text-center text-4xl font-bold mb-12 text-gray-800 dark:text-gray-100" style="font-family: 'Amiri', serif;">
        📖 سور القرآن الكريم
    </h2>
    
    <!-- شبكة السور -->
    {{-- <div class="container mt-4"> --}}
    <div class="row g-3" dir="rtl">
        @foreach ($surahs as $surah)
            <div class="col-6 col-sm-3 col-md-4 col-lg-3" dir="rtl">
                <a href="{{ route('surahs.show', $surah->id) }}" class="text-decoration-none">
                    <div class="card border rounded-lg shadow-sm">
                        <div class="card-body text-center">
                            <p class="card-text fw-bold" style="font-family: 'Amiri', serif;">
                                {{ $surah->name }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            </div>
{{-- </div> --}}


</div>
@endsection

@section('styles')
<style>
    body {
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        direction: rtl;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* شبكة ديناميكية */
        gap: 10px; /* مسافة بين البطاقات */
        padding: 20px;
        justify-content: center;
        background-color: #f9f9f9; /* خلفية للشبكة */
        border: 1px solid #ddd; /* حدود للشبكة */
        border-radius: 10px; /* زوايا مستديرة للشبكة */
    }

    .card {
        border: 1px solid #ddd; /* إضافة حدود للبطاقات */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        background-color: white;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-body {
        padding: 15px;
        text-align: center;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .card-description {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
    }
</style>
@endsection