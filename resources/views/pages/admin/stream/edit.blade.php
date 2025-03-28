@extends('pages.admin.admin-content')

@section('content')
<h2>تعديل المستوى {{$stream->stream_name}}</h2>
<form action="/admin/streams/{{$stream->id}}" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="stream_name" class="form-label">اسم المستوى</label>
        <input type="text" class="form-control" id="stream_name" name="stream_name" value="{{ $stream->stream_name }}"
            required>
        <x-form-error name="stream_name" />
    </div>

    <div class="mb-3">
        <label for="stream_code" class="form-label">رمز المستوى</label>
        <input type="text" class="form-control" id="stream_code" name="stream_code" value="{{ $stream->stream_code }}">
        <x-form-error name="stream_code" />
    </div>

    <div class="mb-3">
        <label for="stream_description" class="form-label">وصف المستوى</label>
        <textarea class="form-control" id="stream_description"
            name="stream_description"> {{$stream->stream_description}} </textarea>
        <x-form-error name="stream_description" />
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-warning">تحديث المستوى</button>
        <button type="reset" class="btn btn-outline-secondary">مسح</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        // تعيين عنوان الصفحة
        $(document).prop('title', 'تعديل المستوى | المعهد التقانللحاسوب');
    });
</script>
@endsection
