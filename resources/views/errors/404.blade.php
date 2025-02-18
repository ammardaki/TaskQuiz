@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Tajawal:wght@300;400;700&display=swap');
    body {
        font-family: 'Tajawal', sans-serif;
        background-color: #f8f9fa;
    }
    .custom-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border-radius: 15px;
        padding: 20px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }
    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 123, 255, 0.2);
    }
    .card-title {
        font-family: 'Amiri', serif;
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: bold;
        color: #555;
    }
    .form-control {
        border: 2px solid #ced4da;
        border-radius: 8px;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
    }
    .btn-success {
        background-color: #28a745;
        border: none;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-success:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        font-weight: bold;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center card-title">➕ إضافة سورة جديدة</h2>

    <!-- رسالة النجاح -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            🎉 {{ session('success') }}
        </div>
    @endif

    <div class="custom-card">
        <form action="{{ route('surahs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">اسم السورة</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="ادخل اسم السورة..." required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-plus"></i> إضافة
                </button>
            </div>
        </form>
    </div>
</div>
@endsection