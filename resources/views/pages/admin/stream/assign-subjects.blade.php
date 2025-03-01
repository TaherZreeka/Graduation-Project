@extends('pages.admin.admin-content')

@section('content')
<h2>تعيين المواد الدراسية</h2>
<form action="/admin/streams/{{$stream->id}}/assign" method="post"
    class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    <div class="mb-3">
        <label for="stream" class="form-label">المستوى</label>
        <input type="text" class="form-control" name="stream" value="{{$stream->stream_name}}" readonly>
        <x-form-error name="stream" />
    </div>
    <div class="mb-3">
        <label for="subjects" class="form-label">المواد الدراسية</label>
        <div class="row">
            @foreach ($subjects as $subject)
            <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$subject->id}}" name="subjects[]"
                        id="{{$subject->code}}" @if(in_array($subject->id, $assignedSubjectIds)) checked @endif>
                    <label class="form-check-label" for="{{$subject->code}}">
                        {{$subject->name}}
                    </label>
                </div>
                <x-form-error name="subjects" />
            </div>
            @endforeach
        </div>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">تعيين</button>
        <button type="reset" class="btn btn-outline-secondary">مسح</button>
    </div>

</form>

<script>
    $(document).ready(function () {
            // تعيين عنوان الصفحة
            $(document).prop('title', 'تعيين المواد الدراسية | نظام إدارة الطلاب');
        });
</script>
@endsection
