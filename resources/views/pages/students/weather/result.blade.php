@extends('pages.students.student-content')

@section('content')

<div class="container float-right" style="direction: rtl;">
    <h1 class="text-center text-primary mb-4">الطقس في {{ $weather['name'] }}</h1>
    <div class="card shadow mt-4">
        <div class="card-body">
            <p class="mb-2"><strong class="text-dark">درجة الحرارة:</strong> <span class="text-info">{{
                    $weather['main']['temp'] }}°C</span></p>
            <p class="mb-2"><strong class="text-dark">الشعور بدرجة الحرارة:</strong> <span class="text-info">{{
                    $weather['main']['feels_like'] }}°C</span></p>
            <p class="mb-2"><strong class="text-dark">حالة الطقس:</strong> <span class="text-success">{{
                    $weather['weather'][0]['description'] }}</span></p>
            <p class="mb-2"><strong class="text-dark">الرطوبة:</strong> <span class="text-warning">{{
                    $weather['main']['humidity'] }}%</span></p>
            <p class="mb-2"><strong class="text-dark">سرعة الرياح:</strong> <span class="text-danger">{{
                    $weather['wind']['speed'] }} م/ث</span></p>
        </div>
    </div>
    <a href="{{ route('students.weather.index') }}" class="btn btn-secondary mt-3">رجوع</a>
</div>

@endsection