<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>التسجيل | نظام إدارة الطلاب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-rtl@0.4.0/dist/css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tajawal Arabic font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #f39c12;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }

        .registration-card {
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease;
        }

        .registration-card:hover {
            transform: translateY(-5px);
        }

        .registration-image {
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .form-section {
            padding: 2.5rem;
            background-color: white;
        }

        .form-title {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        .form-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 50%;
            transform: translateX(50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-reset-custom {
            border: 1px solid #ddd;
            padding: 10px 25px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-reset-custom:hover {
            background-color: #f1f1f1;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .login-link:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
        }

        .input-icon input {
            padding-right: 15px;
            padding-left: 40px;
        }

        @media (max-width: 1199.98px) {
            .registration-card {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }

            .form-section {
                padding: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .registration-image {
                height: 200px;
                width: 100%;
                border-radius: 12px 12px 0 0 !important;
            }
        }
    </style>
</head>

<body>

    <!-- المحتوى -->
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card registration-card shadow-lg">
                        <div class="row g-0">
                            <!-- عمود الصورة -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="{{ asset('assets/img/computing.jpg') }}" alt="صورة تسجيل الطلاب"
                                    class="registration-image w-100 h-100" />
                            </div>
                            <!-- عمود النموذج -->
                            <div class="col-xl-6">
                                <div class="form-section">
                                    <form action="/register" method="post">
                                        @csrf
                                        <h3 class="form-title">نموذج تسجيل الطلاب</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="first_name">الاسم الأول</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control form-control-lg" />
                                                    </div>
                                                    <x-form-error name="first_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="last_name">الاسم الأخير</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control form-control-lg" />
                                                    </div>
                                                    <x-form-error name="last_name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label for="gender" class="form-label">الجنس</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-venus-mars"></i>
                                                        <select class="form-control form-control-lg" name="gender"
                                                            id="gender">
                                                            <option value="">-- اختر الجنس --</option>
                                                            <option value="Male">ذكر</option>
                                                            <option value="Female">أنثى</option>
                                                        </select>
                                                    </div>
                                                    <x-form-error name="gender" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label for="dob" class="form-label">تاريخ الميلاد</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <input type="date" name="dob" id="dob"
                                                            class="form-control form-control-lg" required />
                                                    </div>
                                                    <x-form-error name="dob" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">البريد الإلكتروني</label>
                                                <div class="input-icon">
                                                    <i class="fas fa-envelope"></i>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control form-control-lg" />
                                                </div>
                                                <x-form-error name="email" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="password">كلمة المرور</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-lock"></i>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control form-control-lg" />
                                                    </div>
                                                    <x-form-error name="password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="password_confirmation">تأكيد كلمة
                                                        المرور</label>
                                                    <div class="input-icon">
                                                        <i class="fas fa-lock"></i>
                                                        <input type="password" name="password_confirmation"
                                                            id="password_confirmation"
                                                            class="form-control form-control-lg" />
                                                    </div>
                                                    <x-form-error name="password_confirmation" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <button type="submit" class="btn btn-primary-custom">
                                                <i class="fas fa-save me-2"></i> حفظ البيانات
                                            </button>
                                            <button type="reset" class="btn btn-reset-custom">
                                                <i class="fas fa-redo me-2"></i> إعادة ضبط
                                            </button>
                                        </div>
                                        <a href="/" class="login-link">
                                            <i class="fas fa-sign-in-alt me-2"></i> لدي حساب بالفعل - تسجيل الدخول
                                        </a>
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