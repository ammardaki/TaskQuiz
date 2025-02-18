<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أسئلة إسلامية</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Amiri & Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Header Styling */
        .header {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .header h1 {
            font-family: 'Amiri', serif;
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        /* Buttons Styling */
        .btn-custom {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-register {
            background-color: #28a745;
        }

        .btn-login {
            background-color: #dc3545;
        }

        /* Footer Styling */
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1>مرحبًا بك في موقع الأسئلة الإسلامية</h1>
                <p>اكتشف أسرار القرآن الكريم والسنة النبوية من خلال أسئلة ممتعة ومفيدة.</p>
                <div class="d-flex justify-content-center gap-3">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-custom btn-login">تسجيل الدخول</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-custom btn-register">التسجيل</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>© 2023 أسئلة إسلامية. جميع الحقوق محفوظة. | 
                <a href="#">سياسة الخصوصية</a> | 
                <a href="#">شروط الاستخدام</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>