<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تعريف عنوان الصفحة -->
    <title>{{ config('app.name', 'Quran Quiz') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Google Fonts: Amiri -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* تنسيق عام للصفحة */
        body {
            font-family: 'Amiri', serif;
            direction: rtl;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.2;
        }

        /* تنسيق الشريط العلوي */
        .navbar {
            background-color: #007bff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff !important;
        }

        .navbar .btn-logout {
            background-color: #dc3545;
            border: none;
            padding: 5px 15px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar .btn-logout:hover {
            background-color: #b02a37;
        }

        /* تنسيق البطاقات */
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
        }

        /* تأثير عند تحريك المؤشر فوق البطاقة */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* تنسيق عناصر القائمة */
        .list-group-item {
            background-color: #fff;
            border: none;
            padding: 5px 10px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        /* تأثير عند تحريك المؤشر فوق عنصر القائمة */
        .list-group-item:hover {
            background-color: #f1f1f1;
        }

        /* تنسيق النصوص الغامقة داخل عناصر القائمة */
        .list-group-item strong {
            color: #007bff;
        }

        /* تنسيق العناوين الفرعية */
        h5 {
            font-size: 1.25rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        /* تنسيق زر الارتباط الأساسي */
        a.btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        /* تأثير عند تحريك المؤشر فوق الزر */
        a.btn-primary:hover {
            background-color: #0056b3;
        }

        /* تنسيق العناوين الرئيسية */
        h2 {
            font-family: 'Amiri', serif;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- شريط التنقل العلوي -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- اسم التطبيق -->
            {{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Quran Quiz') }}</a> --}}

            <!-- زر تسجيل الخروج -->
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-logout">تسجيل الخروج</button>
            </form>
        </div>
    </nav>

    <!-- الحاوية الرئيسية للمحتوى -->
    <div class="container py-5">
        <!-- منطقة المحتوى الديناميكي -->
        @yield('content')
    </div>

    <!-- تحسين الأداء عبر تحميل JavaScript في نهاية الصفحة -->
    <!-- Bootstrap JS (اختياري إذا كنت تحتاج إلى ميزات JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>