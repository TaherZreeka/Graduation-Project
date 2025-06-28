<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول | نظام إدارة الجامعة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-rtl@0.4.0/dist/css/bootstrap-rtl.min.css">
    <!-- Sweetalert 2 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-color: #f0932b;
            --secondary-color: #2c3e50;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f5f5;
        }

        .card-registration {
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: none;
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(240, 147, 43, 0.25);
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
        }

        .btn-light-custom {
            border: 1px solid #ddd;
            padding: 10px 25px;
            transition: all 0.3s;
        }

        .btn-light-custom:hover {
            background-color: #f1f1f1;
        }

        .login-image {
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }

        .login-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .login-links a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .login-links a:hover {
            color: #e67e22;
            text-decoration: underline;
        }

        .public-site-link {
            display: inline-block;
            color: #fff !important;
            background-color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            margin-top: 15px;
            text-decoration: none !important;
            transition: all 0.3s;
        }

        .public-site-link:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            color: #fff;
            text-decoration: none !important;
        }

        @media (max-width: 1199.98px) {
            .card-registration {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }
    </style>
    <!-- Tajawal Arabic font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Popup messages -->
    @if (session('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    @endif

    @if (session('warning'))
    <script>
        Swal.fire({
            icon: "warning",
            title: "{{ session('warning') }}",
            showConfirmButton: true,
        });
    </script>
    @endif

    @if (session('error'))
    <script>
        Swal.fire({
            icon: "error",
            title: "{{ session('error') }}",
            showConfirmButton: true,
        });
    </script>
    @endif
    @if (session('info'))
    <script>
        Swal.fire({
            icon: "info",
            title: "{{ session('info') }}",
            showConfirmButton: true,
        });
    </script>
    @endif
    <!--  -->

    <!-- Content -->
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-registration shadow">
                        <div class="row g-0">
                            <!-- Image column -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Sample photo" class="login-image w-100 h-100" />
                            </div>
                            <!-- Form column -->
                            <div class="col-xl-6">
                                <div class="card-body p-md-5">
                                    <form action="/" method="post">
                                        @csrf
                                        <h3 class="mb-4 text-center" style="color: var(--secondary-color);">تسجيل الدخول
                                        </h3>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">البريد الإلكتروني</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg" />
                                            <x-form-error name="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">كلمة المرور</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg" />
                                            <x-form-error name="password" />
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <button type="submit" class="btn btn-primary-custom">
                                                تسجيل الدخول
                                            </button>
                                            <button type="reset" class="btn btn-light-custom">
                                                إعادة ضبط
                                            </button>
                                        </div>

                                        <div class="login-links">
                                            <a href="/register">ليس لدي حساب - إنشاء حساب جديد</a>
                                            {{-- <a href="/forgot-password">نسيت كلمة المرور؟</a> --}}
                                        </div>

                                        {{-- <div class="text-center mt-4">
                                            <a href="{{ route('frontend.institute') }}" class="public-site-link">
                                                الانتقال إلى الموقع العام
                                            </a>
                                        </div> --}}
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