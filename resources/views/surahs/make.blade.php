@extends('layouts.app')

<div class="container mt-5">
    <h2 class="text-center text-4xl font-bold mb-5" style="font-family: 'Amiri', serif;">
        ➕ إضافة سورة جديدة
    </h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card p-4">
        <form action="{{ route('surahs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">اسم السورة</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
        </form>
    </div>
</div>
