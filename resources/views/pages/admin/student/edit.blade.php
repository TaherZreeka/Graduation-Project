@extends('pages.admin.admin-content')

@section('content')
<!-- Slotted content -->
<h2>تعديل الطالب: {{$student->first_name}} {{$student->last_name}}</h2>
<form action="/admin/students/{{$student->id}}" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    @method('PATCH')
    <h5>Student Info</h5>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="fname" class="form-label">اسم الأول</label>
                <input type="text" class="form-control" id="fname" name="std_first_name"
                    value="{{$student->first_name}}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="lname" class="form-label">اسم العائلة</label>
                <input type="text" class="form-control" id="lname" name="std_last_name" value="{{$student->last_name}}"
                    required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="gender" class="form-label">الجنس</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="">--إختر واحدا --</option>
                    <option value="Male" {{$student->gender == 'Male' ? 'selected':''}}>Male</option>
                    <option value="Female" {{$student->gender == 'Female' ? 'selected':''}}>Female</option>
                    <option value="Other" {{$student->gender == 'Other' ? 'selected':''}}>Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="nic" class="form-label">بطاقة الشبكة</label>
                <input type="text" class="form-control" id="nic" name="std_nic" value="{{$student->nic}}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="dob" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$student->dob}}" required>
            </div>
        </div>
    </div>
    <hr>
    <h5>معلومات الوصي</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="initials" class="form-label">Initials</label>
                <input type="text" class="form-control" id="initials" name="initials"
                    value="{{$student->guardian->initials}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="g_fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="g_fname" name="g_first_name"
                    value="{{$student->guardian->first_name}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="g_lname" class="form-label">اسم العائلة</label>
                <input type="text" class="form-control" id="g_lname" name="g_last_name"
                    value="{{$student->guardian->last_name}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="g_nic" class="form-label">بطاقة الشبكة</label>
                <input type="text" class="form-control" id="g_nic" name="g_nic" value="{{$student->guardian->nic}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="g_phone" class="form-label">الرقم الخلوي</label>
                <input type="text" class="form-control" id="g_phone" name="g_phone"
                    value="{{$student->guardian->phone_number}}">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">تعديل الطالب</button>
        <button type="reset" class="btn btn-secondary">مسح</button>
    </div>
</form>
<!--  -->

<script>
    $(document).ready(function() {
        // set page title
        $(document).prop('title', 'تعديل الطالب | المعهد التقني للحاسوب');
    });
</script>

@endsection
