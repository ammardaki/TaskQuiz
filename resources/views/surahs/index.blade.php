@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Tajawal:wght@300;400;700&display=swap');
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 60px;
            height: 100vh;
            background-color: #007bff;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .sidebar a {
            display: inline-block;
            margin: 15px 0;
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease-in-out;
        }
        .sidebar a:hover {
            transform: scale(1.2);
        }

        /* Main Content Styling */
        .main-content {
            margin-left: 80px; /* To avoid overlapping with the sidebar */
            padding: 20px;
        }
        .custom-card {
            background: linear-gradient(to right, #ffffff, #f8f9fa);
            border-radius: 10px;
            padding: 15px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.2);
        }
        .card-text {
            font-family: 'Amiri', serif;
            font-size: 1.1rem;
            color: #333;
        }

        /* Pagination Styling */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .pagination .page-link {
            color: #007bff;
            background-color: #fff;
            border: none;
            font-size: 1rem;
            font-weight: 500;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .pagination .page-link:hover {
            background-color: #007bff;
            color: #fff;
            transform: scale(1.1);
        }
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            color: #fff;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }
    </style>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('results.index') }}" title="عرض النتائج">
            📊
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2 class="text-center text-4xl font-bold mb-5" style="font-family: 'Amiri', serif;">
            📖 قائمة السور
        </h2>
        <!-- زر إضافة سورة -->
        @if (Auth::check() && Auth::user()->email === 'admin@mail.com')
            <div class="text-end mb-4">
                <a href="{{ route('surahs.create') }}" class="btn btn-primary">➕ إضافة سورة جديدة</a>
            </div>
        @endif
        <div class="row g-4">
            @foreach ($surahs as $surah)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="custom-card shadow-sm">
                        <div class="card-body text-center">
                            <p class="card-text fw-bold">
                                {{ $surah->name }}
                            </p>
                            <div class="d-flex justify-content-between" style="gap: 10px;">
                                <!-- زر عرض الأسئلة -->
                                <a href="{{ route('surahs.questions', $surah->id) }}" class="btn btn-sm btn-info text-white">
                                    🎯 عرض الأسئلة
                                </a>
                                <!-- زر إضافة أسئلة (مرئي فقط للمستخدم admin@mail.com) -->
                                @if (Auth::check() && Auth::user()->email === 'admin@mail.com')
                                    <a href="{{ route('questions.create', $surah->id) }}" class="btn btn-sm btn-success text-white">
                                        ➕ إضافة أسئلة
                                    </a>
                                @endif
                            </div>
                            <br>
                            <!-- زر حذف السورة (مرئي فقط للمستخدم admin@mail.com) -->
                            @if (Auth::check() && Auth::user()->email === 'admin@mail.com')
                                <form action="{{ route('surahs.destroy', $surah->id) }}" method="POST"
                                    style="display:inline; margin-top: 10px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('هل أنت متأكد من حذف هذه السورة؟')">
                                        🗑️ حذف السورة
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination Links -->
        <div class="pagination-container mt-5">
            {{ $surahs->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection