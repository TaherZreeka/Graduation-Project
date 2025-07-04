@extends('pages.admin.admin-content')

@section('content')
<h2>الملف الشخصي</h2>
<div class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    <div class="container row">
        <div class="col-md-4">
            <div class="card text-center" style="width: 14rem;">
                <div class="">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                        class="card-img-top" alt="Profile Image" style="border-radius: 50%;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">المشرف</h5>
                    <a href="/admin/settings" class="btn btn-outline-warning">إعدادات</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="name" class="form-label">الأسم</label>
                <input type="text" value="{{\App\Models\Admin::first()->name}}" name="name" id="name"
                    class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">الإيميل</label>
                <input type="email" value="{{auth()->user()->email}}" name="email" id="email" class="form-control"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="date_created" class="form-label">تم إنشاؤه في</label>
                <input type="text" value="{{auth()->user()->created_at}}" name="date_created" id="date_created"
                    class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="date_updated" class="form-label">تم التحديث في</label>
                <input type="text" value="{{auth()->user()->updated_at}}" name="date_updated" id="date_updated"
                    class="form-control" readonly>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // set page title
        $(document).prop('title', 'حساب تعريفي | المعهد التقاني للحاسوب');
    });
</script>
@endsection