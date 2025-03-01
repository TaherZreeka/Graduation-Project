<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>التسجيل | نظام إدارة الطلاب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            direction: rtl;
            text-align: right;
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-right: .75em;
            padding-left: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>

    <!-- المحتوى -->
    <section class="d-flex justify-content-center align-items-center bg-dark" style="min-height: 100vh;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="card card-registration my-4">
                        <div class="row g-0 h-100">
                            <!-- عمود الصورة -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="صورة توضيحية" class="img-fluid h-100"
                                    style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem; object-fit: cover;" />
                            </div>
                            <!-- عمود النموذج -->
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black h-100">
                                    <form action="/register" method="post">
                                        @csrf
                                        <h3 class="mb-5 text-uppercase">نموذج تسجيل الطلاب</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="first_name">الاسم الأول</label>
                                                    <input type="text" name="first_name" id="first_name"
                                                        class="form-control" />
                                                    <x-form-error name="first_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="last_name">الاسم الأخير</label>
                                                    <input type="text" name="last_name" id="last_name"
                                                        class="form-control" />
                                                    <x-form-error name="last_name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="gender" class="form-label">الجنس</label>
                                                    <select class="form-control" name="gender" id="gender">
                                                        <option value="">-- اختر واحدًا --</option>
                                                        <option value="Male">ذكر</option>
                                                        <option value="Female">أنثى</option>
                                                    </select>
                                                    <x-form-error name="gender" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="dob" class="form-label">تاريخ الميلاد</label>
                                                    <input type="date" name="dob" id="dob" class="form-control"
                                                        required />
                                                    <x-form-error name="dob" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">البريد الإلكتروني</label>
                                            <input type="text" name="email" id="email" class="form-control" />
                                            <x-form-error name="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">كلمة المرور</label>
                                            <input type="password" name="password" id="password" class="form-control" />
                                            <x-form-error name="password" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password_confirmation">تأكيد كلمة
                                                المرور</label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="form-control" />
                                            <x-form-error name="password_confirmation" />
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-warning">حفظ</button>
                                            <button type="reset" class="btn btn-light ms-2">إعادة ضبط</button>
                                        </div>
                                        <a href="/">لدي حساب بالفعل</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
