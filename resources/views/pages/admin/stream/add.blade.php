@extends('pages.admin.admin-content')

@section('content')
<h2>إضافة موضوع جديد</h2>
<form action="/admin/streams" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    <div class="mb-3">
        <label for="stream_name" class="form-label">اسم الموضوع</label>
        <input type="text" class="form-control" id="stream_name" name="stream_name" required>
        <x-form-error name="stream_name" />
    </div>

    <div class="mb-3">
        <label for="stream_code" class="form-label">رمز الموضوع</label>
        <input type="text" class="form-control" id="stream_code" name="stream_code">
        <x-form-error name="stream_code" />
    </div>

    <div class="mb-3">
        <label for="stream_description" class="form-label">وصف الموضوع</label>
        <textarea class="form-control" id="stream_description" name="stream_description"></textarea>
        <x-form-error name="stream_description" />
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">إضافة موضوع</button>
        <button type="reset" class="btn btn-outline-secondary">إعادة تعيين</button>
    </div>
</form>

<script>
    $(document).ready(function () {
        // تعيين عنوان الصفحة
        $(document).prop('title', 'إضافة موضوع جديد | المعهد التقني للحاسوب');
    });
</script>
@endsection
