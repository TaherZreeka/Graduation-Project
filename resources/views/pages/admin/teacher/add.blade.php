@extends('pages.admin.admin-content')

@section('content')
<!-- Slotted content -->
<h2>إضافة معلم جديد</h2>
<form action="/admin/teachers" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    <div class="row">
        <div class="col-md-2">
            <div class="mb-3">
                <label for="salutation" class="form-label">اللقب</label>
                <select name="salutation" id="salutation" class="form-select">
                    <option value="">--اختر واحدا--</option>
                    <option value="Dr.">دكتور.</option>
                    <option value="Mr.">السيد.</option>
                    <option value="Mrs.">السّيدة.</option>
                    <option value="Miss.">الانسة.</option>
                </select>
                <x-form-error name="salutation" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="initials" class="form-label">Initials</label>
                <input type="text" class="form-control" id="initials" name="initials" :value="old('initials')" required>
                <x-form-error name="initials" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="first_name" class="form-label">الأسم الأول</label>
                <input type="text" class="form-control" id="first_name" name="first_name" :value="old('first_name')"
                    required>
                <x-form-error name="first_name" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="last_name" class="form-label">الكنية</label>
                <input type="text" class="form-control" id="last_name" name="last_name" :value="old(key: 'last_name')"
                    required>
                <x-form-error name="last_name" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nic" class="form-label">بطاقة الشبكة</label>
                <input type="text" class="form-control" id="nic" name="nic" :value="old('nic')">
                <x-form-error name="nic" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="dob" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="dob" name="dob" :value="old('dob')" required>
                <x-form-error name="dob" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">بريد إلكتروني</label>
                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required>
                <x-form-error name="email" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <x-form-error name="password" />
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">إضافة معلم</button>
        <button type="reset" class="btn btn-secondary">إلغاء</button>
    </div>
</form>
<!--  -->

<script>
    $(document).ready(function() {
        // set page title
        $(document).prop('title', 'Add New Teacher | Student Management System');
    });
</script>

@endsection