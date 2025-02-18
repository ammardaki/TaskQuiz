@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-4xl font-bold mb-5">📋 نتائجي</h2>
    <div class="row">
        @foreach ($results as $result)
            <div class="col-md-12 mb-4">
                <div class="card border rounded-lg shadow-sm p-4">
                    <h5 class="mb-3 font-weight-bold">
                        📖 سورة {{ $result->surah->name }}
                    </h5>
                    <p class="card-text">
                        <strong>النتيجة:</strong> {{ $result->score }} / {{ $result->total_questions }}
                    </p>
                    <p class="card-text text-muted">
                        <small>التاريخ: {{ $result->created_at->format('Y-m-d') }}</small>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4 d-flex justify-content-center">
        {{ $results->links() }}
    </div>
</div>
@endsection