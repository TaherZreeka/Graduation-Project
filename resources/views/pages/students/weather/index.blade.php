@extends('pages.students.student-content')

@section('content')

<div class="container pull-right" style="direction: rtl;">
    <h1 class="text-center text-primary mb-4">حالة الطقس</h1>
    <form action="{{ route('students.weather.get') }}" method="POST" class="mt-4 border p-4 rounded shadow"
        style="background-color: #f9f9f9;">
        @csrf
        <div class="mb-3">
            <label for="city" class="form-label text-dark fw-bold">أدخل اسم المدينة</label>
            <input type="text" name="city" id="city" class="form-control shadow-sm" placeholder="مثال: لندن" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block shadow">الحصول على الطقس</button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

@endsection